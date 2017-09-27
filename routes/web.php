<?php

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
#you can also do Route::post if you are sending data to the server
Route::get('/', function () {
    return view('Home');
});

Route::get('/', function () {
   return view('About');
});

Route::get('/', function() {
   return view('Contact');
});
