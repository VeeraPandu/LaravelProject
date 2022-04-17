<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request){
       //usage of isMethod method
       $methodname=$request->isMthod('POST');
       echo 'isMethod : '.$methodname;
       echo '<br>';
        
         //Usage of Path Menthod
        $path=$request->path();
        echo 'path: '.$path;
        echo '<br>';
        
        //usage of Method method
        $methodtype=$request->method();
        echo 'method : '.$methodtype;
        echo '<br>';

        //Usage of fullUrl method
        $url1=$request->fullUrl();
        echo 'fullurl: '.$url1;
        echo '<br>';

        //
    } 
}
