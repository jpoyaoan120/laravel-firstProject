<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\userController;
use App\Http\Controllers\StudentController;

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


Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/registration', [UserController::class, 'registration'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/store', [UserController::class, 'store']);
Route::post('/login/process', [UserController::class, 'process']);

// Student
Route::get('/add/student', [StudentController::class, 'create']);
Route::post('/add/student', [StudentController::class, 'store']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::put('/student/{id}', [StudentController::class, 'update']);





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
