<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Education;
use App\Models\JobField;
use App\Models\Province;
use App\Models\Subdistrict;
use App\Models\UrbanVillage;
use App\Models\User;
use App\Models\UserJobField;
use App\Models\UserPersonalInformation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = UserPersonalInformation::with(['education:id,name', 'province:id,province_name', 'city:id,city_name', 'subdistrict:id,subdistrict_name', 'urbanVillage:id,urban_village_name'])
                                            ->where('user_id', Auth::user()->id)->first();
        $user_job_fields = UserJobField::with('jobField:id,name')->where('user_id', Auth::user()->id)->get();
        return view('web.page.profile.index', compact('profile', 'user_job_fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = UserPersonalInformation::where(['user_id' => Auth::user()->id, 'unique_id' => $id])->firstOrFail();
        $provinces = Province::pluck('province_name', 'id');
        $cities = City::where('province_id', $profile->province_id)->pluck('city_name', 'id');
        $subdistricts = Subdistrict::where('city_id', $profile->city_id)->pluck('subdistrict_name', 'id');
        $urban_villages = UrbanVillage::where('subdistrict_id', $profile->subdistrict_id)->pluck('urban_village_name', 'id');
        $educations = Education::pluck('name', 'id');
        $job_fields = JobField::pluck('name', 'id');
        $user_job_fields = UserJobField::with('jobField:id,name')->where('user_id', Auth::user()->id)->get();
        return view('web.page.profile.edit', compact('profile', 'provinces', 'cities', 'subdistricts', 'urban_villages', 'educations', 'job_fields', 'user_job_fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = UserPersonalInformation::where(['user_id' => Auth::user()->id, 'unique_id' => $id])->firstOrFail();
        $input = $request->except('email');
        $input['telephone'] = str_replace(' ', '', $request->telephone);
        $input_user['name'] = $request->name;

        DB::beginTransaction();
        try{
            /* UPDATE USER PROFILE */
            $profile->update($input);

            /* UPDATE USER */
            $user = User::where('id', Auth::user()->id)->first();
            $user->update($input_user);

            /* UPDATE JOB FIELD */
            $input_job_field = [];
            if($request->has('job_field_id')) {
                foreach($request->job_field_id as $jf)
                {
                    $input_job_field[] = 
                    [
                        'user_id' => Auth::user()->id,
                        'job_field_id' => $jf
                    ];
                }
            }

            UserJobField::where('user_id', Auth::user()->id)->delete();
            if(count($input_job_field) > 0) {
                UserJobField::insert($input_job_field);
            }

            DB::commit();
            return redirect(route('profile.index'))->with('success', 'Bio data berhasil diperbarui');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect(route('profile.index'))->with('error', 'Bio data gagal diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
