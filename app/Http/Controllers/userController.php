<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

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

    public function store(Request $request){

        $validated = $request->validate([
            "name" => ['required', 'min: 4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        
        auth()->login($user);
    }
}
