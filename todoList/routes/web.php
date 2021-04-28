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

Route::get('/todos', 'App\Http\Controllers\TodoController@index');

Route::get('/addTodo', 'App\Http\Controllers\TodoController@addTodo');

Route::post('/upload', 'App\Http\Controllers\TodoController@upload');

Route::get('/{id}/updateTodo', 'App\Http\Controllers\TodoController@updateTodo');

Route::patch('/saveUpdate', 'App\Http\Controllers\TodoController@saveUpdate')
;
Route::get('/{id}/doneTodo', 'App\Http\Controllers\TodoController@doneTodo');

Route::get('/{id}/deleteTodo', 'App\Http\Controllers\TodoController@deleteTodo');