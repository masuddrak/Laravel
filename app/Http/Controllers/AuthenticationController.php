<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;
class AuthenticationController extends Controller
{
    //
    function login(Request $request)
    {
        $request->validate(([
            "username" => "required | min:5 | max:10",
            "password" => "required",
            'city' => ['required', new Uppercase],

        ]), ["username.min" => "minimum 5 character", "city.Uppercase" => "city "]);
        return $request;
    }
}
