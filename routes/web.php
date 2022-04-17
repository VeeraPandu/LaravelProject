<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoopsController;
use App\Http\Controllers\IfelseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UriController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*----------------------------------------*/
//working with controllers
Route::get('/hiview/{name}', [HomeController::class,'index']);

/*----------------------------------------*/

// Route::get('/student/grades/{cgpa}',function($cgpa){
//     return "CGPA"
// })

Route::get('/rr1/{name}/{id}',[StudentController::class,'index'])->name('checking1');
Route::get('/studredirect',function(){
    return redirect()->route('checking1',['name'=>"Pandu", 'id'=>15486]);
});

Route::get('/rr2/{name}/{id}',[StudentController::class,'index1'])->name('checking2');
Route::get('/studredirect1/{name}/{id}',function($name, $id){
    return redirect()->route('checking2',compact('name','id'));
});

Route::get('/redirectroute',function(){
    return redirect()->away('https://www.google.com');
});

Route::get('/header',function(){
    return response('Hello World',200)->header('Content-Type','text/html');
});

Route::get('/json',function(){
    return response()->json(['name'=>'Pandu','occupation'=>'teacher']);
});

Route::get('/aboutme',function(){
    $name=request('name');
    $id=request('id');
    return "Welcome, ".$name." Your id is ".$id;
});
/*-------------------------------------------------------------------------------------*/


//Working with blade templates

Route::get('/firstblade',function(){
    return view('firstblade',['fname'=>'Pandu']);
});

Route::view('/firstblade2','firstblade',['fname'=>'Veera']);
/*-------------------------------------------------------------------------------------*/

//working with blade directives
Route::get('/loops',[LoopsController::class,'index']);

Route::get('/ifelse',[IfElseController::class,'index']);

/*-------------------------------------------------------------------------------------*/

//blade template inheritance
/*Route::get('/homepage',function(){
    return view('menus.home');
});
Route::get('/aboutus',function(){
    return view('menus.about');
});
Route::get('/servicespage',function(){
    $Services=['Service 1','Service 2','Service 3','Service 4'];
    return view('menus.services',compact('Services'));
});*/

/*
Route::get('/myhome',function(){
    return view('CA3.homelayout');
});
Route::get('/aboutus1',function(){
    return view('CA3.aboutuslayout');
});
Route::get('/contactus',function(){
    return view('CA3.contactuslayout');
});
Route::get('/ourproducts',function(){
    return view('CA3.productslayout');
});*/






Route::view('/mainpagecontentlayout','mainpagecontent');
Route::view('/myhome','homelayout');

// Route::get('/login',[LoginController::class,'index']);
Route::get('loginlayout',[LoginController::class,'register']);
Route::view('/login','loginlayout');

Route::view('/signup','signuplayout');
Route::view('/contactus','contactuslayout');
Route::view('/mainpage','mainpagelayout');
Route::view('/managebooking','managebookinglayout');
Route::view('/popularlocations','popularlocationslayout');
Route::view('/famousplaces/jaipur','jaipur');
Route::view('/famousplaces/agra','agra');
Route::view('/famousplaces/hyderabad','hyderabad');
Route::view('/famousplaces/chennai','chennai');
Route::view('/famousplaces/thiruvananthapuram','thiruvananthapuram');
Route::view('/famousplaces/bangalore','bangalore');
Route::view('/choosecars','cars');


















/*-------------------------------ADVANCED ROUTING--------------------------------------*/

Route::get('/user/profile',[ProfileController::class,'show'])->name('profile');
Route::get('/verifyuser',[ProfileController::class,'verifyuser']);

Route::get('/user/{id}/{name}/profile',function($id,$name){
    return 'I am user '.$name.' and my  ID is : '.$id;
})->name('someprofile');
Route::get('checkprofile',[ProfileController::class,'checkprofile']);
Route::get('/checkprofile1/{id}/{name}',[ProfileController::class,'checkprofile1']);


//ROUTE PREFIX
Route::prefix('admin')->group(function(){
    Route::get('/custos',function(){
        //Matches the "/admin/custos" URL
        echo "Hey Custo";
    });
    Route::get('/faculties',function(){
        //Matches the "/admin/faculties" URL
        echo "Hey faculty";
    });
});

//Route Name prefix
Route::name('admin.')->group(function () {
    Route::get('/use', function () {
    // Route assigned name "admin.users"...
    return "Hey user";
    })->name('users');
    Route::get('/teacher', function () {
    // Route assigned name "admin.users"...
    return "Hey teacher";
    })->name('teacher');
    });
    Route::get('adminredirect',function(){
    return redirect()->route('admin.users');
    });
    Route::get('adminredirect1',function(){
    return redirect()->route('admin.teacher');
    });


    //Route::get('/foo/bar',[UriController::class,'index']);
Route::get('/foo/bar',[UriController::class,'index'])->name('foo');
Route::get('/register',function(){
    return view('register');
});
Route::post('/user/register',[UserRegistration::class,'postRegister']);

//``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````
Route::get('testlocali/{lang}',function($lang){
    App::setlocale($lang);
    return view('testlocali');
});


Route::get('/session/get',[SessionController::class,'getSessionData']);
Route::get('/session/set',[SessionController::class,'storeSessionData']);
Route::get('/session/remove',[SessionController::class,'deleteSessionData']);
Route::get('/validation',function(){
    return view('validation');
});



/*-----------------------------------------------------------------------------------------------------------------------------------*/

Route::get('/cookie/set',[CookieController::class,'setCookie']);
Route::get('/cookie/get',[CookieController::class,'getCookie']);
Route::get('/cookie/delete',[CookieController::class,'deleteCookie']);
