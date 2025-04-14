<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;

Route::get('/', function () {
    return view('home');
}); 
Route::get("/home",function(){
    return view("home");
});
Route::get('/user', function () {
    return view('user',["name"=>"masud"]);
}); 
Route::get('/about/{name}', function ($name) {
    return view('about',["name"=>$name]);
});
Route::view("/welcome","welcome");
// route::redirect("/home","/welcome");
Route::get("user/{name}",[UserContoller::class,"getUser"]);
Route::get("danamic-user/{name}",[UserContoller::class,"viewUser"]);
Route::get("admin-user",[UserContoller::class,"getAddminUser"]);
Route::get("login",[UserContoller::class,"checkLoginPage"]);