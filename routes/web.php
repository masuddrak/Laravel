<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;

Route::get('/', function () {
    return view('home');
});
Route::get('/about/{name}', function ($name) {
    return view('about',["name"=>$name]);
});
Route::view("/welcome","welcome");
route::redirect("/home","/welcome");
Route::get("user/{name}",[UserContoller::class,"getUser"]);