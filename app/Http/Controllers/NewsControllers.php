<?php

namespace App\Http\Controllers;
use App\Helpers\GlobalHelper;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\kategori;
use Image;
use DB;
use Auth;

class NewsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::join('news_categories','news_categories.id','=','news.news_category_id')->where('status',1)->get();
        return view('news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function draft()
    {
        $data = News::join('news_categories','news_categories.id','=','news.news_category_id')->where('status',0)->get();
        return view('news.draft',compact('data'));
    }

    public function konfirmasi($id)
    {
        $data = News::find($id);
        $update['status'] = 1;
        $data->update($update);
        return back()->with('success', 'Berhasil di Konfirmasi !');
    }

    public function create()
    {
        $kategori = kategori::all();
        return view('news.create',compact('kategori'));
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
            $input['slug'] = GlobalHelper::generateSlug($input['title'], 'news', 'slug');
            $input['user_id'] = Auth::user()->id;
            $news = News::create($input);
            if($request->hasFile('image')){
                $potonews = $request->file('image');
                $path = public_path('/images/news');
                $thumbnail_path = $path . '/thumbnails';
    
                if (!is_dir($path)) {
                    mkdir($path, 0777, TRUE);
                }
                
                if (!is_dir($thumbnail_path)) {
                    mkdir($thumbnail_path, 0777, TRUE);
                }

                $news_poto = 'news_'. $news->id . '.' . $request->file('image')->extension();
            
                $fotonewsThumbPath = $thumbnail_path . '/' . 'thumbnail_' . $news_poto;
                $fotonewsThumb = Image::make($potonews->getRealPath())->resize(100, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $SimpanFotonewsThumb = Image::make($fotonewsThumb)->save($fotonewsThumbPath);
                
                /* resize ukuran foto */
                $fotonewsPath = $path . '/' . $news_poto;
                $oriFotonews  = Image::make($potonews->getRealPath())->resize(1000, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $simpanFotonews = Image::make($oriFotonews)->save($fotonewsPath);
            
                $update['image'] = $news_poto;
                $news->update($update);
            }

            DB::commit();
       
            return redirect(route('news.index'))->with('success', 'News berhasil ditambahkan');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi nanti');
        }

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
       $data = News::find($id);
       $kategori = kategori::all();
       return view('news.edit',compact('data','kategori'));
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
        $input = $request->all();
        // dd($input);
        DB::beginTransaction();
        try {
            $news = News::find($id);
            $news->update($input);
            if($request->hasFile('image')){
                $potonews = $request->file('image');
                $path = public_path('/images/news');
                $thumbnail_path = $path . '/thumbnails';
    
                if (!is_dir($path)) {
                    mkdir($path, 0777, TRUE);
                }
                
                if (!is_dir($thumbnail_path)) {
                    mkdir($thumbnail_path, 0777, TRUE);
                }

                $news_poto = 'news_'. $news->id . '.' . $request->file('image')->extension();
            
                $fotonewsThumbPath = $thumbnail_path . '/' . 'thumbnail_' . $news_poto;
                $fotonewsThumb = Image::make($potonews->getRealPath())->resize(100, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $SimpanFotonewsThumb = Image::make($fotonewsThumb)->save($fotonewsThumbPath);
                
                /* resize ukuran foto */
                $fotonewsPath = $path . '/' . $news_poto;
                $oriFotonews  = Image::make($potonews->getRealPath())->resize(1000, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $simpanFotonews = Image::make($oriFotonews)->save($fotonewsPath);
            
                $update['image'] = $news_poto;
                $news->update($update);
            }

            DB::commit();
       
            return redirect(route('news.index'))->with('success', 'News berhasil di update');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi nanti');
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
        DB::table("news")->where('id',$id)->delete();
        return redirect()->route('news.index')
                        ->with('success','News deleted successfully');
    }
}
