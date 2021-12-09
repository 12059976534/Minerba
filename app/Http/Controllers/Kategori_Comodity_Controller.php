<?php

namespace App\Http\Controllers;
use App\Helpers\GlobalHelper;
use Illuminate\Http\Request;
use App\Models\Kategory_comodity;
use DB;

class Kategori_Comodity_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategory_comodity::all();
        return view('Kategory_Comudity.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kategory_Comudity.create');
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
            $kategori = Kategory_comodity::create($input);
            DB::commit();
       
            return redirect(route('Kategory_comodity.index'))->with('success', 'Kategori berhasil ditambahkan');
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
        $data = Kategory_comodity::find($id);
        return view('Kategory_Comudity.edit',compact('data'));
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
            $kategori = Kategory_comodity::find($id);
            $kategori->update($input);
            DB::commit();
       
            return redirect(route('Kategory_comodity.index'))->with('success', 'Kategori berhasil di update');
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
        // DB::table("Kategory_comodity")->where('id',$id)->delete();
        Kategory_comodity::where('id',$id)->delete();
        return redirect()->route('Kategory_comodity.index')
                        ->with('success','Kategori deleted successfully');
    }
}
