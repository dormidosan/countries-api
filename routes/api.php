<?php

use App\Http\Controllers\Api\V1\CityController;
use App\Http\Controllers\Api\V1\CountryController;
use App\Http\Controllers\Api\V1\RegionController;
use App\Http\Controllers\Api\V1\StateController;
use App\Http\Controllers\Api\V1\SubregionController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return citiesAPIResponse();
});
Route::get('/v1', function () {
    return citiesAPIResponse();
});

function citiesAPIResponse(): JsonResponse
{
    return response()->json([
        "message" => "Welcome to cities API",
        "documentation" => "https://github.com/dormidosan/countries-api"
    ]);
}
/*
Route::middleware('throttle:60,1')->group(function () {
    Route::group(['prefix' => 'v1','namespace'=> 'App\Http\Controllers\Api\V1'], function (){
        Route::get('countries/{country}/states', ['uses'=> 'CountryController@states']);
        Route::apiResource('cities',CityController::class);
    });
});
*/

Route::group(['prefix' => 'v1','namespace'=> 'App\Http\Controllers\Api\V1', 'middleware' => 'throttle:watchdog'], function (){
    Route::get('countries/{country}/states', ['uses'=> 'CountryController@states']);
    Route::get('states/{state}/cities', ['uses'=> 'StateController@cities']);
    Route::apiResource('cities',CityController::class);
    Route::apiResource('countries',CountryController::class);
    Route::apiResource('regions',RegionController::class);
    Route::apiResource('states',StateController::class);
    Route::apiResource('subregions',SubregionController::class);
});
