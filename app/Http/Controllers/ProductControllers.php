<?php

namespace App\Http\Controllers;
use App\Helpers\GlobalHelper;
use App\Models\Product;
use App\Models\KategoriProduct;
use Illuminate\Http\Request;

class ProductControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriProduct::all();
        return view('product.create',compact('kategori'));
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
        //
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
        //
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
