<?php

namespace App\Http\Controllers\web;
use App\Models\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index($kategori){
        $data = News::select('news.*','news.slug as slug2')->join('news_categories','news_categories.id','=','news.news_category_id')->where('news_categories.name',$kategori)->paginate(10);
        return view('web.page.news.index',compact('data'));
    }

    public function detail(News $slug){
        $related = DB::table('news')->where('news_category_id', $slug->news_category_id)->get();
        return view('web.page.news.detail',['data'=> $slug, 'related' => $related]);
    }
}
