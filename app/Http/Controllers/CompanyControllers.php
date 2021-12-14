<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyControllers extends Controller
{
   public function index(Request $request)
   {
       $request->session()->put('tab','company');
       $data = Company::where('is_verified',1)->get();
       return view('company.index',compact('data'));
   }


   public function unconfirm(Request $request)
   {
        $request->session()->put('tab','companyunconfirm');
        $data = Company::where('is_verified',0)->get();
       return view('company.index',compact('data'));
   }

   public function Detail($id)
   {
        $data = Company::find($id);
        return view('company.detail',compact('data'));
   }


   public function Konfirmasi($id)
   {
        $data = Company::find($id);
        if($data->is_verified == 0){
            $update['is_verified'] = 1;
            $data->update($update);
        }else{
            $update['is_verified'] = 0;
            $data->update($update);
        }
        return back()->with('success', 'Confirmasi status success');
   }
}
