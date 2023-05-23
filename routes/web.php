<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [userController::class, 'index']);

// ----------------------------

// * Request *
// Route::get('/users', function(Request $request){
//     dd($request);
//     return null;
// });

// ----------------------------

// * Response *
// Route::get('/users/{id}/{name}', function($id, $name){
//     return response($id.' - '.$name, 200);
// });

// Route::get('/request-json', function(){
//     return response()
//         ->json(['name' => 'Jay-R',
//                 'age' => '24'
//         ]);
// });

// Route::get('/request-download', function(){

//     $path = public_path().'/Test.txt';
//     $name = 'Sample.text';
//     $headers = array('Content-type: application/text-plain');

//     return response()->download($path, $name, $headers);
// });

// ----------------------------

// * Sample Route *
// Route::get('/', function () {
//     return view('welcome');
// });

// ----------------------------

// * Routes *
// Route::get();
// Route::post();
// Route::put();
// Route::delete();
// Route::patch();
// Route::options();

// ----------------------------

// * Spicific Request allowed *
// Route::match(['get','post'], '/', function(){

//     return 'Get and Post is allowed';
// });

// ----------------------------

// * Allowed All Request *
// Route::any('/', function(){
//     return 'Allowed All Request';
// });

// ----------------------------

// * Return default view only w/o data request
// Route::view('/', 'welcome');

// ----------------------------

// * Redirect Page
// Route::redirect('/welcome', '/');
// Route::permanentRedirect('/welcome', '/');

// ----------------------------

