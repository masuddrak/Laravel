<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // create user
    function create(){
        return "Create User";
    }
    function getUsers(){
        return "Get  User";
    }
}
