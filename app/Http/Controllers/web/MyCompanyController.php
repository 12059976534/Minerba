<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class MyCompanyController extends Controller
{
    public function index()
    {
        $company = Company::where('id', auth()->user()->company_id)->first();
        return view('web.page.my-company.index', compact('company'));
    }

    public function edit()
    {
        $company = Company::where('id', auth()->user()->company_id)->first();
        return view('web.page.my-company.edit', compact('company'));
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $company = Company::where('id', auth()->user()->company_id)->first();
        $company->update($input);
        return redirect(route('my-company.index'))->with('success', 'Bio data perusahaan berhasil diperbarui');
    }
}
