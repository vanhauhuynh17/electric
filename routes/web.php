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
Route::get('/index','MainController@index') -> name("chart");
Route::get('/login','MainController@login') -> name("login");
Route::get('/logout','MainController@logout') -> name("logout");
Route::post('/login','MainController@postLogin') -> name("post-login");
Route::get('/get-data','MainController@getData') -> name("get-data");
Route::get('/get-datatable','MainController@getDatatable') -> name("get-datatable");
Route::get('/export-data','MainController@exportData') -> name("export-data");
