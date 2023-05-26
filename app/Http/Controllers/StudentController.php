<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){

        // $data = Students::all();
        
        // Please check AppServiceProvider.php
        return view('index');
    }

    public function create(){

        return view('students.create')->with('title', 'Add New');
    }

    public function store(Request $request){

        $validated = $request->validate([
            "first_name" => ['required', 'min: 4'],
            "last_name" => ['required', 'min: 4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email', Rule::unique('students', 'email')],
        ]);

        Students::create($validated);

        return redirect('/')->with('message', 'Successfully added');
    }

    public function show($id){
        
        $data = Students::findOrFail($id);
        dd($data);
    }
}
