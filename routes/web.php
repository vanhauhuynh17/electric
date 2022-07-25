<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthLogin;

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
Route::get('/index','MainController@index') -> name("chart") -> middleware(AuthLogin::class);;


Route::group(['prefix'=>'electric'], function(){
    Route::post('/filter','MainController@filter') -> name("filter-chartfilter-chart");
    Route::get('/login','MainController@login') -> name("login");
    Route::get('/logout','MainController@logout') -> name("logout");
    Route::post('/login','MainController@postLogin') -> name("post-login");
    Route::post('/get-data','MainController@getData') -> name("get-data");
    Route::post('/get-datatable','MainController@getDatatable') -> name("get-datatable");
    Route::post('/export-data','MainController@exportData') -> name("export-data");
});
