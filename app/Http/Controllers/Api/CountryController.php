<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\CityResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\StateResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends BaseController
{

    public function index()
    {
        $country=Country::paginate();
        return $this->sendResponse(CountryResource::collection($country),'All Country');
    }


    public function showStates( $id)
    {
        $country=Country::find($id);
        $states=$country->states;
        return $this->sendResponse(StateResource::collection($states),'All States');

    }

    public function showCities($id)
    {
        $country=Country::find($id);
        $cities=$country->cities;
        return $this->sendResponse(CityResource::collection($cities),'All Cities');

    }


}
