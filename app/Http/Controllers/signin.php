<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signin extends Controller
{
    function process(Request $req){
        $req->validate([
            'name'=>'required | min:6 | max:12',
            'password'=>'required | min:6 | max:12'
        ]);
        $db = DB::Select('select * from');
        return $req;
    }
}
