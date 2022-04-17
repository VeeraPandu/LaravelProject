<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfElseController extends Controller
{
    public function index()
    {
        $records = ['Record 1','Record 2','Record 3','Record 4','Record 5'];
        return view('ifelseblade',compact('records'));
    }
}
