<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getSudentName($name){
        return $name;                                       
    }
}
