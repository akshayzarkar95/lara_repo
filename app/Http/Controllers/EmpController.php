<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
    
    public function index()
    {
        return view('employee');
    }

    public function aggt()
    {
         return DB::table('employees')->max('id');
    }

    public function show()
    {
        $emp = employee::paginate(4);
        return view('list',['employees'=>$emp]);
    }

    public function saveData(Request $request)
    {
         $emp = new employee();
         $emp->name = $request->name;
         $emp->email = $request->email;
         $emp->created_at = date('Y-m-d H:i:s');
         $emp->save();
         return redirect('emp');
    }
}
