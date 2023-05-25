<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index($id){

        return "Test lang sa Class".$id;
    }

    public function login(){

        if(View::exists('user.login')){
            return view('user.login');
        } else {
            // return response()->view('errors.404');
            return abort(404);
        }

    }

    public function registration(){

        if(View::exists('user.registration')){
            return view('user.registration');
        } else {
            return abort(404);
        }

    }
}
