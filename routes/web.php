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

/* 回傳字串
Route::get('/', function () {
    return 'any string';
});
*/
/* 回傳視窗
Route::get('/', function () {
    return view("welcome");
});
*/
/* 跳轉⾴⾯
Route::get('/',function (){
    return redirect("https://www.google.com.tw/");
});
*/
/* 接收必要參數
Route::get('hello/{name}',function ($name){
    return 'Hello, '.$name;
});
*/
/* 接收選擇性參數 */
Route::get("hello/{name?}", function ($name = "Everyone"){
    return 'Hello, '.$name;
});
