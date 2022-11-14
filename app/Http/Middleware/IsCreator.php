<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsCreator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->product) {
            if ($request->user()->id == $request->product->user_id) {
                return $next($request);
            }
            return response(['error' => 'You don\'t have access']);
        }
        if ($request->user()->id == $request->category->user_id) {
            return $next($request);
        }
        return response(['error' => 'You don\'t have access']);
    }
}
