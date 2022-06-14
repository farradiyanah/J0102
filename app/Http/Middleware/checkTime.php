<?php

namespace App\Http\Middleware;
use Carbon\Carbon;

use Closure;
use Illuminate\Http\Request;
use App\Models\TestMiddleware;

class checkTime
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
        
        $beforeTime = cache()->remember('bye',10,function(){
             return TestMiddleware::where('TM_ID', 2)->first();
        });

        // dd($beforeTime->TM_ROUTE);

        $currTime = Carbon::now();

        if ($currTime->toDateTimeString() >= $beforeTime->TM_TIME) {
        // if ($currTime->toDateTimeString() >= '2022-06-08 12:40:00') {

            return redirect($beforeTime->TM_ROUTE);
        }
        return $next($request);
    }
}
