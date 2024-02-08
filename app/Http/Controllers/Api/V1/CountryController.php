<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;

use App\Http\Resources\V1\CountryCollection;
use App\Http\Resources\V1\StateCollection;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request){

        $partial_name = $request->input('country');
        $countries = Country::where('name', 'like', '%'.$partial_name.'%')->paginate(10);
        return new CountryCollection($countries->appends($request->query()));

    }

    public function states(Country $country){
        $states = $country->states()->paginate(10);
        return new StateCollection($states);
    }

}
