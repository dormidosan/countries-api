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
     * Retrieve list of states
     *
     * @OA\Get(
     *     path="/states/{state_id}/cities",
     *     tags={"States"},
     *     summary="Retrieve cities for a specific state",
     *     description="Returns a list of cities for the specified state.",
     *     @OA\Parameter(
     *         name="state_id",
     *         in="path",
     *         required=true,
     *         description="ID of the state",
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Parameter(
     *          name="nopagination",
     *          in="query",
     *          description="Flag to disable pagination",
     *          @OA\Schema(type="boolean")
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(
     *                     property="id",
     *                     type="integer",
     *                     format="int64",
     *                     description="The unique identifier for the city"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string",
     *                     description="The name of the city"
     *                 ),
     *                 @OA\Property(
     *                     property="state_id",
     *                     type="integer",
     *                     format="int64",
     *                     description="The ID of the state the city belongs to"
     *                 ),
     *                 @OA\Property(
     *                     property="country_id",
     *                     type="integer",
     *                     format="int64",
     *                     description="The ID of the country the city belongs to"
     *                 ),
     *                 @OA\Property(
     *                     property="country_code",
     *                     type="string",
     *                     description="The country code of the city"
     *                 )
     *                 )
     *             ),
     *             @OA\Property(
     *                 property="links",
     *                 type="object",
     *                 description="Links related to the response."
     *             ),
     *             @OA\Property(
     *                 property="meta",
     *                 type="object",
     *                 description="Meta information about the response."
     *             )
     *         )
     *     )
     * )
     *
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
