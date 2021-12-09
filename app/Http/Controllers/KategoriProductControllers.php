<?php

namespace App\Http\Controllers;
use App\Helpers\GlobalHelper;
use App\Models\KategoriProduct;
use Illuminate\Http\Request;
use DB;

class KategoriProductControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KategoriProduct::all();
        return view('kategori_product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_product.create');
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
            $input['slug'] = GlobalHelper::generateSlug($input['name'], 'product_categories', 'slug');
            $kategori = KategoriProduct::create($input);
            DB::commit();
       
            return redirect(route('KategoriProduct.index'))->with('success', 'Kategori berhasil ditambahkan');
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
        $data = KategoriProduct::find($id);
       return view('kategori_product.edit',compact('data'));
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
            $kategori = KategoriProduct::find($id);
            $kategori->update($input);
            DB::commit();
       
            return redirect(route('KategoriProduct.index'))->with('success', 'Kategori berhasil di update');
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
        DB::table("product_categories")->where('id',$id)->delete();
        return redirect()->route('KategoriProduct.index')
                        ->with('success','Kategori deleted successfully');
    }
}
