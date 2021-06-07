<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('user/{id}',[UserController::class,'view']);

Route::group(["middleware"=>["protect"]],function() {
Route::get("view",[UserController::class,"view"]);
Route::view("about","about");
});

Route::get("login",function()
{
    if(session()->has('username'))
    {
        return view('user');
    }
    return view('login');
});

Route::get("logout",function()
{
    session()->pull('username',null);
    return view('login');
});

Route::post("user",[UserController::class,"home"]);
Route::get("store",[storeController::class,"index"]);
Route::post("save",[storeController::class,"save"]);


Route::view("check","check")->middleware('numcheck');
//Route::view("about","about");
Route::view("noaccess","noaccess");

Route::get("img",[ImgController::class,"index"]);
Route::post("imgsave",[ImgController::class,"saveImg"]);

//3-2-2021
Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
});

Route::get("emp",[EmpController::class,"index"]);
Route::post("save",[EmpController::class,"saveData"]);


//4-2-2021
Route::get('emplist',[EmpController::class,"show"]);
Route::get('aggt',[EmpController::class,"aggt"]);


/****/
Route::view("learn","learn");
/****/

//Route::view("profile","profile");

