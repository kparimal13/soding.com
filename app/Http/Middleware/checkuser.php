<?php

namespace App\Http\Middleware;

use Closure;

class checkuser
{
			
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		
		/* /*  if( ($request->session()->get('userid') === null )&& ( ( $request->route()->uri !== "getLogin" ) && ( $request->route()->uri !== "getInsert" ) ) && ( ( $request->route()->uri == "getLogin" ) && ( $request->route()->uri !== "getInsert" ) ) )  {
			
			
			return redirect('/');
		}
		/*else  if(  ($request->route()->uri === "getLogin" || $request->route()->uri === "getInsert" || $request->route()->uri === "") && $request->session()->get('userid') != null )
		{
			
			return redirect('dashboard');
		} */
        return $next($request); 
    }
}
