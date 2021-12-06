<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class HomeControllers extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('web.page.home.index',compact('kategori'));
    }
}
