<?php

namespace App\Http\Controllers\web;

use App\Helpers\GlobalHelper;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $experts = Expert::with('education:id,name')->where('company_id', Auth::user()->company_id)->get();
        return view('web.page.expert.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $educations = Education::pluck('name', 'id');
        return view('web.page.expert.create', compact('educations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $input = $request->all();
        $input['company_id'] = Auth::user()->company_id;
        Expert::create($input);
        
        return redirect(route('expert.index'))->with('success', 'Tenaga ahli berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function show(Expert $expert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }
        
        $expert = Expert::where(['company_id' => Auth::user()->company_id, 'id' => $id])->firstOrFail();
        $educations = Education::pluck('name', 'id');
        return view('web.page.expert.edit', compact('educations', 'expert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $input = $request->all();
        $expert = Expert::where(['company_id' => Auth::user()->company_id, 'id' => $id])->firstOrFail();
        $expert->update($input);
        return redirect(route('expert.index'))->with('success', 'Tenaga ahli berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $expert = Expert::where(['company_id' => Auth::user()->company_id, 'id' => $id])->firstOrFail();
        $expert->delete();
        return redirect(route('expert.index'))->with('success', 'Tenaga ahli berhasil dihapus');
    }
}
