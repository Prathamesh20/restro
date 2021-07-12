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
Route::group(['middleware'=>"web"],function(){

Route::get('home','restroController@index');

Route::get('list','restroController@list');
Route::post('add','restroController@add');
Route::get('delete/{id}','restroController@delete');
Route::get('edit/{id}','restroController@edit');
Route::post('edit','restroController@update');
Route::view('add','add');
Route::view('register','register');
Route::post('register','restroController@register');
Route::view('login','login');
Route::post('login','restroController@login');
Route::get('logout',function(){
    session()->forget('user');
    return redirect('home');
});
});