<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(Request $req){
        return "hello";
    }
}
