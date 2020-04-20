<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('todos');
//    return view('welcome');
});
Route::get('todos','TodosController@index') ->name('todos');
Route::get('todos/detail/{todo}','TodosController@show') ->name('todo');
Route::get('todos/create','TodosController@create') ->name('create');
Route::post('todos/insert','TodosController@insertData') ->name('insert');
Route::get('todos/delete/{todo}','TodosController@delete') -> name('delete');
Route::get('todos/edit/{todo}','TodosController@edit')->name('edit');
Route::post('editTodo/{todo}','TodosController@editTodo')->name('editTodo');
Route::get('complete/{todo}','TodosController@complete')->name('complete');
