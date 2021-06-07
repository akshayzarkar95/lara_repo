<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgController extends Controller
{
    
    public function index()
    {
        return view('img');
    }

    public function saveImg(Request $request)
    {     
            return $request->file('file')->store('img');
    }
}
