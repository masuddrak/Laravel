<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //

    function getUsers(){
        // $users=User::all();
        // $user=User::where("name","sakib")->get();
        // $user=User::insert([
        //     "name"=>"laky",
        //     "phone"=>"5646542",
        // ]);
        // if($user){
        //     return "user created";
        // }else{
        //     return "user not created";
        // }
        // $user=User::where("name","masud")->update(["phone"=>"017654321"]);
        // if($user){
        //     return "user created";
        // }else{
        //     return "user not created";
        // }
        $user=User::where("name","masud")->delete();
        if($user){
            return "user deleted";
        }else{
            return "user not created";
        }
        // return $user;
        // return view("user",["name"=>$name]);
    }
}
