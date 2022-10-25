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

/*
Route::get('/',function(){
    return view('welcome');
});
*/

Route::get('/',function(){
    return 'welcome';
});

Route::get('r1',function(){
    return redirect('r2');
});

Route::get('r2',function(){
    return view('welcome');
});

Route::get('hello/{name}',function($name){
    return 'Hello, '.$name;
});
    