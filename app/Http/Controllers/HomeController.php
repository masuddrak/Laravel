<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function uploaddImage(Request $req){
        // Save file to storage/app/public/uploads
        // $path = $req->file('image')->store('uploads', 'public');
        $path=$req->file("image")->store("images","public");

        // Now $path = 'uploads/filename.jpg'
        return view('home', ['imagePath' => $path]);
    }
}
