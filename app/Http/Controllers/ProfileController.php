<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        return 'Welcome User';
    }
    public function verifyuser(){
        //echo $url=route('profile');
        $url=route('profile');
        return redirect($url);
        //return redirect()->route('profile');
    }
    public function checkprofile(){
        //
        $url=route('someprofile',['id'=>1343,'name'=>'Pandu']);
        return redirect($url);
    }
    public function checkprofile1($id,$name){
        $url=route('someprofile',compact('id', 'name'));
        return redirect($url);
    }
}
