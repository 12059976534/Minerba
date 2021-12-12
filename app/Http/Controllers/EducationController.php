<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Helpers\GlobalHelper;
use DB;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $data = Education::all();
        return view('educations.index',compact('data'));
    }
    
    //educations
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();    
        // dd($input);
        DB::beginTransaction();
        try { 
            $input['slug'] = GlobalHelper::generateSlug($input['name'], 'educations', 'slug');
            $kategori = Education::create($input);
            DB::commit();
       
            return redirect(route('educations.index'))->with('success', 'educations berhasil ditambahkan');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi nanti');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Education::find($id);
        return view('educations.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        // dd($input);
        DB::beginTransaction();
        try {
            $kategori = Education::find($id);
            $kategori->update($input);
            DB::commit();
       
            return redirect(route('educations.index'))->with('success', 'educations berhasil di update');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi nanti');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table("Kategory_comodity")->where('id',$id)->delete();
        Education::where('id',$id)->delete();
        return redirect()->route('educations.index')
                        ->with('success','educations deleted successfully');
    }
}
