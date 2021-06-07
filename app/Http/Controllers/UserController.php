<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http; //use for consume api
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //return User::all();
        //return Http::get("https://jsonplaceholder.typicode.com/todos/1");
        return view('login');
    }


    public function view($value = '')
    {
    	return view('user',['names'=>['Akshay','Akki','Akkizr']]);
    }

    public function home(Request $req)
    {
         $username = $req->input('username');
         session()->put('username',$username);
         return view('user');
    }
}
