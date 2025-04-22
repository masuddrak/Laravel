<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Age Check Middleware<br>";
        // echo "<pre>";
        // echo "<br/>";
        // echo $request->age;
        // echo "<br/>";
        // print_r($request);
        // echo "Your age is: ".$request->age."<br>";
        if($request->age <18){
            die("You are not allowed to access this page");
        }
        return $next($request);
    }
}
