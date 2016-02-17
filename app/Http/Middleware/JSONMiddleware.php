<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class JSONMiddleware
{
    /**
     * Handle an incoming request to ensure that its in JSON format
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if($request->header('Content-Type') != 'application/json') {
//            return response()->json(['data' => 'Missing or incorrect headers', 'code' => '401', 'status' => 'error'], 401)->header('Content-Type', 'application/json');
//        }
//
//        if($request->isMethod('post') || $request->isMethod('put')) {
//            if( empty(json_decode($request->getContent()))) {
//                return response()->json(['data' => 'Missing or malformed json body', 'code' => '401', 'status' => 'error'], 401)->header('Content-Type', 'application/json');
//            }
//        }
        
        Log::info('JSONMiddleware JSONMiddleware ');
        return $next($request);
    }
}
