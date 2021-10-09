<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class signin extends Controller
{
    function process(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required | min:6 | max:12'
        ]);
        $email = $req->input('name');
        $password = $req->input('password');
        $db = DB::select('select * from user_register');
        foreach ($db as $user) {
            echo $user->email;
        }
        //return view('home');
    }
}
