<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){

        return "Test lang sa Class".$id;
    }

    public function create(){

        return view('user.create');
    }
}
