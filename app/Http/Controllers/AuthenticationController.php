<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    function login(Request $request){
        $request->validate(([
            "username"=>"required",
            "password"=>"required",
        ]));
        return $request;
    }
}
