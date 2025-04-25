<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamShow;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Services;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use Illuminate\Support\Facades\App;

// Route::get("messagecard",function(){
//     return view("messagecard");
// });
// Route::get('/', function () {
//     return view('home');
// }); 
// Route::get("/home",function(){
//     return view("home");
// });
// Route::get('/user', function () {
//     return view('user',["name"=>"masud"]);
// }); 
// Route::get('/about/{name}', function ($name) {
//     return view('about',["name"=>$name]);
// });
// Route::view("/welcome","welcome");
// // route::redirect("/home","/welcome");
// Route::get("user/{name}",[UserContoller::class,"getUser"]);
// Route::get("danamic-user/{name}",[UserContoller::class,"viewUser"]);
// Route::get("admin-user",[UserContoller::class,"getAddminUser"]);
// Route::get("login",[UserContoller::class,"checkLoginPage"]);
// // form hande in laravel
// Route::view("/login","authentication.login");
// Route::post("loginInfo",[AuthenticationController::class,"login"]);

// Route::view("/exam", "exam.home")->name("exam");

// // Route::view("/about/user","exam.about")->name("about");

// Route::get("/show",[ExamShow::class,"show"]);



// group of route withe prefix
// Route::prefix("user/add")->group(function(){
//     Route::get(("/create"),[UserController::class,"create"]);
//     Route::get(("/getuser"),[UserController::class,"getUsers"]);
// });
// // group of controller
// Route::controller(StudentController::class)->group(function(){
//     Route::get("student/{name}","getSudentName");
// });
// 

// create middleware apply
// Route::view("user","user")->middleware("agecheck");
// Route::view ("home","home");

// // grup middleare
// Route::middleware("agecheck")->group(function(){
//     Route::view("user","user");
//     Route::view ("home","home");
// });
// Route::view("about","about")->middleware(AgeCheck::class);
// Route::get("contact",[ContactController::class,"users"]);
// Route::get("services",[Services::class,"getServices"]);

// database with data collection
// Route::get("users",[UserController::class,"getUsers"]);
// Route::view("form","form");
// // posts management
// // Route::any("/userpost",[PostController::class,"getPost"]);
// // match route
// Route::match(["post"],"/userpost",[PostController::class,"getPost"]);
// Route::view("service","service");
// Route::get("about",[AboutController::class,"getMessage"]);
// Route::post("cretaeAbout",[AboutController::class,"createMessage"]);
Route::view("","welcome");

Route::post("uploadImage",[HomeController::class,"uploaddImage"]);

// describe laravel localization
Route::view("about","about");
Route::get("about/{lang}",function($lang){
    App::setLocale($lang);
    return view ("about");
});