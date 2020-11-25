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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index/{id}',function ($id){
   return 'Hello'.$id;
});

Route::get('task','TaskController@index');
Route::get('task/read/{id}','TaskController@read')
    ->where(['id' => '[0-9]+','name' => '[a-z]+']);
//    ->where('id' ,'.*');      //解锁全局匹配

//TODO 重定向，index指向task

//Route::redirect('index','task', 301);
//Route::permanentRedirect('index','task');


//TODO 配置restful API 路由
Route::apiResource('users','UserController');

Route::fallback(function (){
   return redirect('/');
});