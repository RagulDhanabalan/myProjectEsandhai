<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    public function index($id)
    {
        $students = Student::get();
        dd($students);
        return view('show');
    }
    public function insert_form()
    {
        return view('show');
    }
    public function insert(Request $request){
        $name = $request->input('name');
        DB::insert("insert into students (name) values(?),[$name]");
        return 'Record inserted successfully<a href="/"click here to go back</a>';
    }
}
