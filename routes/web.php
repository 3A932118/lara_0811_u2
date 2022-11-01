<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//設定Route反應，回傳view
Route::get('/', function () {
    return view('welcome');
});

//設定Route回傳字串
Route::get('/', function () {
    return 'welcome';
});

//設定Route跳轉路由
Route::get('r1', function () {
    return redirect('r2');
});
Route::get('r2', function() {
    return view('welcome');
});

//修改Route接受參數
/*Route::get('hello/{name}', function($name) {
    return 'Hello, '.$name;
});*/

//修改參數成選擇性
Route::get('hello/{name?}', function($name='Everybody') {
    return 'Hello, '.$name;
})->name('hello.index');//為Route取名為hello.index

//隨便增加路由
/*Route::get('nothing', function(){
    return 'nothing';
});*/

//設定dashbord路徑的Route
Route::get('dashboard', function() {
    return 'dashboard';
});

//設定另一個Route，以群組包起來設定prefix
Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', function() {
        return 'admin dashboard';
    });
});

Route::get('home',[HomeController::class, 'index'])->name('home.index');