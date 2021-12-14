<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Subdistrict;
use App\Models\UrbanVillage;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /* REGION */
    public function getCities(Request $request)
    {
        $cities = City::where('province_id', $request->province_id)->get();
        return response(['success' => true, 'data' => $cities, '_token' => csrf_token()]);
    }

    public function getSubdistricts(Request $request)
    {
        $subdistricts = Subdistrict::where('city_id', $request->city_id)->get();
        return response(['success' => true, 'data' => $subdistricts, '_token' => csrf_token()]);
    }

    public function getUrbanVillages(Request $request)
    {
        $urban_villages = UrbanVillage::where('subdistrict_id', $request->subdistrict_id)->get();
        return response(['success' => true, 'data' => $urban_villages, '_token' => csrf_token()]);
    }

    /* END REGION */
}
