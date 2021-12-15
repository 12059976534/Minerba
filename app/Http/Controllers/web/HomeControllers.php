<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class HomeControllers extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $data = News::select('news.*','news.slug as slug2')->join('news_categories','news_categories.id','=','news.news_category_id')->paginate(10);
        return view('web.page.home.index',compact('kategori','data'));
    }
}
