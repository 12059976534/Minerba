<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $company = Company::where('id', auth()->user()->company_id)->first();
        return view('web.page.dashboard.index', compact('company'));
    }
}
