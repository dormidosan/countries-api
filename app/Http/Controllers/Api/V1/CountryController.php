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

        if($request->has('nopagination')){
            $countries = Country::all();
            $results = ['data'=> new CountryCollection($countries), 'links'=>[], 'meta' => []];
            return response()->json($results);
        }

        $partial_name = $request->input('country');
        if($partial_name){
            $countries = Country::where('name', 'like', '%'.$partial_name.'%')->paginate(10);
        } else {
            $countries = Country::paginate(10);
        }

        #dd($countries);
        return new CountryCollection($countries->appends($request->query()));

    }

    public function states(Country $country){
        $states = $country->states()->paginate(10);
        return new StateCollection($states);
    }

}
