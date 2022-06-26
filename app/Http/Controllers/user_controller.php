<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    function login(Request $req){
        $user =  User::where(['email'=>$req->email])->first();
        if($user || $req->pass != $user->password){
            return "Note matched";
        }
        else
        {
            return "matched";
        }
    }
}
