<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;
use App\Models\State;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param State $state
     * @param Request $request
     * @return CityCollection|JsonResponse
     */
    public function cities(State $state, Request $request): CityCollection|JsonResponse
    {
        if($request->has('nopagination')){
            $cities = $state->cities;
            $results = ['data'=> new CityCollection($cities), 'links'=>[], 'meta' => []];
            return response()->json($results);
        }
        $cities = $state->cities()->paginate(10);
        return new CityCollection($cities);
    }
}
