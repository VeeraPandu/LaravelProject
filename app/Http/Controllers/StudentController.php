<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($name, $id)
    {
        //$name = "Raj";
       // $id = 123
        return "Welcome Student, ".$name." Your Registration no is ".$id;
    }
    public function index1($name,$id)
    {
        return view('Student', compact('name','id'));
    }
}
// Route::get('/rr1/{name}/{id}',[StudentController::class,'index'])->name('checking1');
// Route::get('/studredirect',function(){
//     return redirect()->route('checking1',['name'=>"Pandu", 'id'=>15486]);
// });