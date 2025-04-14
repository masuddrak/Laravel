<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\view;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    function getUser($name)
    {
        echo "masud tanabir " . $name;
    }
    function viewUser($name)
    {
        return view("user", ["name" => $name]);
    }
    function getAddminUser()
    {
        return view("admin.user");
    }
    function checkLoginPage()
    {
        $name="siam";
        $users=["masud","siam","tanabir"];
        if (view::exists("admin.login")) {
            return view("admin.login",["name"=>$name,"users"=>$users]);
        }else{
            echo "view not found";
        }
    }
}
