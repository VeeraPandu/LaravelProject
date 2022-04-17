<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function postRegister(Request $request){
        $name=$request->input('name');
        echo 'Name Using input method: '.$name;
        echo '<br>';

        $username=$request->name;
        echo 'Name request instance property : '.$name;
        echo '<br>';
    }
}
