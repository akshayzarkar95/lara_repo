<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    
    public function index()
    {
        return view('store');
    }

    public function save(Request $re)
    {
       $username = $re->input('username');
       session()->flash('username',$username);
       return redirect('store');
    }
}
