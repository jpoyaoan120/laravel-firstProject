<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index($id){

        
        return "Test lang sa Class".$id;
    }
}
