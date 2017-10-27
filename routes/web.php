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

Route::get('/','NotesController@index');



Route::get('/e/{note}','NotesController@edit');

Route::get('/d/{note}','NotesController@destroy');


Route::group(['middleware' => ['web']],function()
{
	Route::post('/add', ['as' => 'add','uses' => 'NotesController@store']);
	Route::post('/update/{id}', ['as' => 'update/{id}','uses' => 'NotesController@update']);
});
