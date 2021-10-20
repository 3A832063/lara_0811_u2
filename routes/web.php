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

/* 回傳字串 */
Route::get('home', function () {
    return 'any string';
});

/* 回傳視窗 */
Route::get('/', function () {
    return view("welcome");
});

/* 跳轉⾴⾯ */
Route::get('r1',function (){
    return redirect("r2");
});
Route::get('r2', function () {
    return view("welcome");
});
/* 接收必要參數 */
Route::get('hello/{name}',function ($name){
    return 'Hello, '.$name;
});

/* 接收選擇性參數 */
Route::get("hello/{name?}", function ($name = "Everyone"){
    return 'Hello, '.$name;
});
