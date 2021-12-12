<?php

namespace App\Http\Controllers;
use App\Helpers\GlobalHelper;
use App\Models\Product;
use App\Models\KategoriProduct;
use App\Models\Kategory_comodity;
use Illuminate\Http\Request;
use DB;
use Image;

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
        $Kategoory_comodity = Kategory_comodity::all();
        return view('product.create',compact('kategori','Kategoory_comodity'));
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
            $input['slug'] = GlobalHelper::generateSlug($input['name'], 'products', 'slug');
            $input['company_id'] = 1;
            $input['comodity_id'] = 2;
            $input['admin_fee'] = 1;
            $input['selling_price'] = 3000;
            $input['views'] = 20;
            $product = Product::create($input);
            if($request->hasFile('image')){
                $potoproduct = $request->file('image');
                $path = public_path('/images/product');
                $thumbnail_path = $path . '/thumbnails';
    
                if (!is_dir($path)) {
                    mkdir($path, 0777, TRUE);
                }
                
                if (!is_dir($thumbnail_path)) {
                    mkdir($thumbnail_path, 0777, TRUE);
                }

                $product_poto = 'product_'. $product->id . '.' . $request->file('image')->extension();
            
                $fotoproductThumbPath = $thumbnail_path . '/' . 'thumbnail_' . $product_poto;
                $fotoproductThumb = Image::make($potoproduct->getRealPath())->resize(100, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $SimpanFotoproductThumb = Image::make($fotoproductThumb)->save($fotoproductThumbPath);
                
                /* resize ukuran foto */
                $fotoproductPath = $path . '/' . $product_poto;
                $oriFotoproduct  = Image::make($potoproduct->getRealPath())->resize(1000, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $simpanFotoproduct = Image::make($oriFotoproduct)->save($fotoproductPath);
            
                $update['main_image'] = $product_poto;
                $product->update($update);
            }

            DB::commit();
       
            return redirect(route('Product.index'))->with('success', 'product berhasil ditambahkan');
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
       $data = Product::find($id);
       $kategori = KategoriProduct::all();
       return view('product.edit',compact('data','kategori'));
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
        DB::beginTransaction();
        try {
            $product = Product::find($id);
            $product->update($input);
            if($request->hasFile('image')){
                $potoproduct = $request->file('image');
                $path = public_path('/images/product');
                $thumbnail_path = $path . '/thumbnails';
    
                if (!is_dir($path)) {
                    mkdir($path, 0777, TRUE);
                }
                
                if (!is_dir($thumbnail_path)) {
                    mkdir($thumbnail_path, 0777, TRUE);
                }

                $product_poto = 'product_'. $product->id . '.' . $request->file('image')->extension();
            
                $fotoproductThumbPath = $thumbnail_path . '/' . 'thumbnail_' . $product_poto;
                $fotoproductThumb = Image::make($potoproduct->getRealPath())->resize(100, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $SimpanFotoproductThumb = Image::make($fotoproductThumb)->save($fotoproductThumbPath);
                
                /* resize ukuran foto */
                $fotoproductPath = $path . '/' . $product_poto;
                $oriFotoproduct  = Image::make($potoproduct->getRealPath())->resize(1000, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                    });
                $simpanFotoproduct = Image::make($oriFotoproduct)->save($fotoproductPath);
            
                $update['main_image'] = $product_poto;
                $product->update($update);
            }

            DB::commit();
       
            return redirect(route('Product.index'))->with('success', 'product berhasil ditambahkan');
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
        DB::table("products")->where('id',$id)->delete();
        return redirect()->route('Product.index')
                        ->with('success','News deleted successfully');
    }
}
