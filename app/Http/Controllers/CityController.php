<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities as Cities;
use App\Models\Country;

class CityController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*
          try {
            return  Cities::findOrFail(134)->country;
          } catch (\Exception $e) {
            return $e->getMessage();
          }
          */

          try {
                     $country = Country::find(134);
                      $cities = $country->get_cities;
                      return response() -> json([
                        "data" => $cities 
                      ]) 
                      ;
          } catch (\Exception $e) {
            return $e -> getMessage();
          }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}
