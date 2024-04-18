<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Http\Resources\V1\CountryCollection;
use App\Http\Resources\V1\StateCollection;

use App\Models\Country;

use Illuminate\Http\Request;


class CountryController extends Controller
{
    /**
     * Retrieve list of countries
     *
     * @OA\Get(
     *     path="/countries",
     *     tags={"Countries"},
     *     summary="Retrieve list of countries",
     *     description="Returns a paginated list of countries.",
     *     @OA\Parameter(
     *         name="nopagination",
     *         in="query",
     *         description="Flag to disable pagination",
     *         @OA\Schema(type="boolean")
     *     ),
     *     @OA\Parameter(
     *         name="country",
     *         in="query",
     *         description="Filter countries by partial name",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                  type="object",
     *                  @OA\Property(
     *                      property="id",
     *                      type="number",
     *                      example="1",
     *                  ),
     *                  @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      example="Afghanistan",
     *                  ),
     *                  @OA\Property(
     *                      property="iso2",
     *                      type="string",
     *                      example="AF",
     *                  ),
     *                  @OA\Property(
     *                      property="iso3",
     *                      type="string",
     *                      example="AFG",
     *                  ),
     *                  @OA\Property(
     *                      property="region_id",
     *                      type="number",
     *                      example="3",
     *                  ),
     *                  @OA\Property(
     *                      property="subregion_id",
     *                      type="number",
     *                      example="14",
     *                  ),
     *              ),
     *             ),
     *             @OA\Property(
     *                 property="links",
     *                 type="object",
     *                 description="Links for pagination, if applicable"
     *             ),
     *             @OA\Property(
     *                 property="meta",
     *                 type="object",
     *                 description="Metadata about the response"
     *             )
     *         )
     *     )
     * )
     *
     */
    public function index(Request $request)
    {
        if ($request->has('nopagination')) {
            $countries = Country::all();
            $results = ['data' => new CountryCollection($countries), 'links' => [], 'meta' => []];
            return response()->json($results);
        }

        $partial_name = $request->input('country');
        if ($partial_name) {
            $countries = Country::where('name', 'like', '%' . $partial_name . '%')->paginate(10);
        } else {
            $countries = Country::paginate(10);
        }

        #dd($countries);
        return new CountryCollection($countries->appends($request->query()));

    }





    /**
     * @OA\Get(
     *     path="/countries/{country}/states",
     *     tags={"Countries"},
     *     summary="Retrieve states for a specific country",
     *     description="Returns a list of states for the specified country.",
     *     @OA\Parameter(
     *         name="country",
     *         in="path",
     *         required=true,
     *         description="ID of the country",
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
     *                      type="object",
     *                      @OA\Property(
     *                          property="id",
     *                          type="integer",
     *                          description="The ID of the location"
     *                      ),
     *                      @OA\Property(
     *                          property="name",
     *                          type="string",
     *                          description="The name of the location"
     *                      ),
     *                      @OA\Property(
     *                          property="country_id",
     *                          type="integer",
     *                          description="The ID of the country to which the location belongs"
     *                      ),
     *                      @OA\Property(
     *                          property="country_code",
     *                          type="string",
     *                          description="The country code of the location"
     *                      ),
     *                      @OA\Property(
     *                          property="iso2",
     *                          type="string",
     *                          description="The ISO2 code of the location"
     *                      )
     *                  )
     *             ),
     *             @OA\Property(
     *                  property="links",
     *                  type="object",
     *                  description="Links for pagination, if applicable"
     *              ),
     *              @OA\Property(
     *                  property="meta",
     *                  type="object",
     *                  description="Metadata about the response"
     *              )
     *         )
     *     )
     * )
     */
    public function states(Country $country, Request $request)
    {

        if ($request->has('nopagination')) {
            $states = $country->states;
            $results = ['data' => new StateCollection($states), 'links' => [], 'meta' => []];
            return response()->json($results);
        }

        $states = $country->states()->paginate(10);
        return new StateCollection($states);
    }


}
