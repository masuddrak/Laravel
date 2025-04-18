<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamShow extends Controller
{
    function show($name)
    {
        echo $name;
        return view("exam.about");
    }
};
