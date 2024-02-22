<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;
use App\Http\Resources\V1\CountryCollection;
use App\Http\Resources\V1\StateCollection;
use App\Models\Country;
use App\Models\State;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Request;

class StateController extends Controller
{
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function cities(State $state, Request $request){
        if($request->has('nopagination')){
            $cities = $state->cities;
            $results = ['data'=> new CityCollection($cities), 'links'=>[], 'meta' => []];
            return response()->json($results);
        }
        $cities = $state->cities()->paginate(10);
        return new CityCollection($cities);
    }
}
