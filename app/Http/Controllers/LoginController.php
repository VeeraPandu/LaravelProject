<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function register(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        return $request->input();
    }
   
}
