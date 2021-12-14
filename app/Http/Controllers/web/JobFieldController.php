<?php

namespace App\Http\Controllers\web;

use App\Helpers\GlobalHelper;
use App\Http\Controllers\Controller;
use App\Models\JobField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!GlobalHelper::isVerifiedCompany())
        // {
        //     return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        // }

        $job_fields = JobField::where('company_id', Auth::user()->company_id)->get();
        return view('web.page.job-field.index', compact('job_fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(!GlobalHelper::isVerifiedCompany())
        // {
        //     return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        // }
        return view('web.page.job-field.create');
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
        $input['company_id'] = Auth::user()->company_id;
        JobField::create($input);
        
        return redirect(route('job-field.index'))->with('success', 'Bidang kerja berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobField  $jobField
     * @return \Illuminate\Http\Response
     */
    public function show(JobField $jobField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobField  $jobField
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $job_field = JobField::where(['company_id' => Auth::user()->company_id, 'id' => $id])->firstOrFail();
        return view('web.page.job-field.edit', compact('job_field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobField  $jobField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!GlobalHelper::isVerifiedCompany())
        {
            return redirect(route('my-company.edit'))->with('warning', 'Data perusahaan belum diverifikasi');
        }

        $input = $request->all();
        $job_field = JobField::where(['company_id' => Auth::user()->company_id, 'id' => $id])->firstOrFail();
        $job_field->update($input);
        return redirect(route('job-field.index'))->with('success', 'Bidang kerja berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobField  $jobField
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobField $jobField)
    {
        //
    }
}
