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
|localhost/admin/users
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',function(){
    echo "ALLLLLLLLLLLLLLAAAAAAAAAAAAAAAAAAAAAA";
});

Route::get('/menu',function(){
    echo "naber";
});

Route::get('/basket',function(){
    echo "nabFDHDFHDFer";
});


