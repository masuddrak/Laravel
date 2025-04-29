<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function createUser(Request $req)
    {
        $student = new User();
        $student->name=$req->name;
        $student->phone=$req->phone;
        if ($student->save()){
            return redirect("users");
        }
        else{
            return "User not Created";
        }

    }
    function getUsers()
    {
        $users = User::paginate(3);
        return view("users", ["users" => $users]);
    }
    function deleteUsers(Request $req)
    {
        $users = User::destroy($req->ids);
        if ($users) {
            return redirect("users");
        } else {
            return "User not Deleted";
        }
       
    }
}
