<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;
use App\Http\Resources\V1\CityResource;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(Request $request){

        $request->input('country');

        return new CityCollection(City::where('')->take(10));
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city): CityResource
    {
        return new CityResource($city);
    }
}
