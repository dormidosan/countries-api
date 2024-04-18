<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *             title="Cities, states and countries",
 *             version="1.0",
 *             description="List of cities, states and countries",
 * )
 *
 * @OA\Server(url="http://localhost/city-api/public/api/v1")
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
