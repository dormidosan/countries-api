<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\JsonResponse;

use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (ThrottleRequestsException $e, $request) {
            //return response()->json(['message' => 'Toosa Many Attempts.'], 429);
        });
    }

    /**
     * Render an exception into an HTTP response.
     * @throws Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($e instanceof ThrottleRequestsException) {
            // Customize the response for 429 Too Many Requests error
            //return response()->json(['message' => 'Too Many Attempts.'], 429);
            //return response('Too many attempts', 200)->header('Content-Type', 'text/html');
            return response('{"message":"Too many attempts, retry in '.$this->getSecondsBeforeNextAttempt($e).' seconds"}', 200)->header('Content-Type', 'application/json');

        }

        return parent::render($request, $e);
    }

    // Get the number of seconds before the next attempt.
    protected function getSecondsBeforeNextAttempt(ThrottleRequestsException $e)
    {
        return optional($e->getHeaders(), function ($headers) {
            return $headers['Retry-After'];
        }) ?? 60;
    }
}
