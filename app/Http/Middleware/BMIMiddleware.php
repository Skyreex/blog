<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BMIMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'gender' => 'required'
        ]);
        return $next($request);
    }
}
