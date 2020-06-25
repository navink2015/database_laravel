<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('school');                  //welcome
// });


// Route::resource('student', 'students');
Route::get('/',function(){return view('school');});
Route::get('/s','students@a');
Route::get('/d','students@render'); 
