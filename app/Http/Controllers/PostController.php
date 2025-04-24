<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    // function getPosts(){
    //     // $posts=Post::all();
    //     // print_r($req) ;
    //     // return $posts;

    // }
    function getPost(Request $req)
    {
        // return $req;
        // return "this is path:". $req->path();
        // echo "<pre>";
        // print_r($req);
        // echo "<br>";
        // echo "this ip is:". $req->ip();
        // if ($req->isMethod("post")) {
        //     echo "this is post method";
        // }else{
        //     echo "this is not post method";
        // }
        echo $req->input("title");
        echo "<br>";
        $req->session()->put("name",$req->input("title"));
        echo "<br>";
        echo session("name");
       return redirect("home");
    }
    function removeSession(Request $req)
    {
        $req->session()->pull("name");
        return redirect("home");
    }
}
