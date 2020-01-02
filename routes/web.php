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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    return view('user',["user"=>"sanit"]);
});
Route::get("users/{id}",'User@index');
Route::view('/mobiles','Mobiles');
Route::get("users",'User@index');


