<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function getMessage(Request $request)
    {
        return view("about");
    }
    // function createMessage(Request $request)
    // {
    //     $request->session()->put("message", $request->message);
    //     return redirect("/about");
    // }
// flash session
    function createMessage(Request $request)
    {
        // $request->session()->put("message", $request->message);
        $request->session()->flash("message", $request->message);
       
        return redirect("/about");
    }
}
