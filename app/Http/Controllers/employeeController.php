<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()){
            $data = Employee::get();
            return response()->json($data);
        }
        return view ('employee');
    }
}
