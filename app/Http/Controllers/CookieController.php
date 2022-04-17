<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        return Cookie::make('name','Pandu',1);
    }
    public function getCookie(Request $request){
        return Cookie::get('name');
    }
    public function deleteCookie(Request $request){
        return Cookie::forget('name');
    }
}
