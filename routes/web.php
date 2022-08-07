<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/', 'UserController@index');
    Route::get('/add-user', 'UserController@create');
    Route::post('/user-add', 'UserController@store'); /* */
    Route::get('/delete-user{id}', 'UserController@delete');
    Route::get('/show-user/{id}', 'UserController@show'); //cyk
    Route::post('/edit-user{id}', 'UserController@update');
    Route::get('/edit-user{id}', 'UserController@edit');
   
});