<?php

namespace App\Http\Middleware;
// namespace App\Http\Middleware\Response;
use Carbon\Carbon;

use Closure;
use Illuminate\Http\Request;
use App\Models\TestMiddleware;

class AfterTime
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
        // cache()->forget('bye');
       //saveing cache
        $beforeTime = cache()->remember('bye','',function(){
            return TestMiddleware::get();
       });
        var_dump($beforeTime);

        // $currTime = Carbon::now();

        // if ($currTime->toDateTimeString() >= $beforeTime->TM_TIME) {
        //     // dd(1);
        //     return redirect($beforeTime->TM_ROUTE);
        // }

        return $next($request);
    }
}
