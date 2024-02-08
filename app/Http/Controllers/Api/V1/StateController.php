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
    //
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }
    public function index(Request $request){
        #dd($request->ip()); CHECK # of request
        if (!$request->has('mensaje')) {
            // Manually check and apply rate limiting
            $key = $request->ip(); // You can use a different key if needed
            $maxAttempts = 2;
            $decayMinutes = 1;
            if ($this->limiter->tooManyAttempts($key, $maxAttempts)) {
                return response()->json(['error' => 'Too Many Attempts.']);
            }
            $this->limiter->hit($key, $decayMinutes * 60);
        }

        $partial_name = $request->input('state');
        $states = State::where('name', 'like', '%'.$partial_name.'%')->paginate(10);
        return new StateCollection($states->appends($request->query()));
    }

    public function cities(State $state){
        $cities = $state->cities()->paginate(10);
        return new CityCollection($cities);
    }
}
