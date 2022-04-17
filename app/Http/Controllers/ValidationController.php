<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'name'=>'required | min:6 | max:12',
            'email'=>'required |email|max:120',
            'password'=>'required'
        ]);
        $name=$request->name;
        echo $name.'<br>';
        $email=$request->email;
        echo $email.'<br>';
        $password=$request->password;
        echo $password.'<br>';

    }
}
