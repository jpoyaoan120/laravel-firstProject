<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('students.edit', ['student' => $data, 'title' => 'Edit Student Information']);
    }

    public function update(Request $request, $id) {

        $validated = $request->validate([
            "first_name" => ['required', 'min: 4'],
            "last_name" => ['required', 'min: 4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email'],
            "updated_at" => now()
        ]);

        DB::table('students')->where('id', $id)->update($validated);

       return back()->with('message', 'Successfully updated');

    }
}
