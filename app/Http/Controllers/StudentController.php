<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        // $data = Students::all();
        
        // Please check AppServiceProvider.php
        return view('index');
    }
}
