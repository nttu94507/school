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

Route::get('/', function () {
    return view('welcome');


});
Route::get('/choose','PostchooseController@getall');
Route::post('/choose','PostchooseController@adddate');
Route::get('/choose/delete/{id}','PostchooseController@delete');
Route::get('/choose/{id}','PostchooseController@updateForm');
Route::post('/choose/update','PostchooseController@update');
Route::post('/addnewstu','PostchooseController@addnewstu');
Route::get('/addnewstu', function () {
    return view('addnewstu');
});
Route::post('/addnewcla','PostchooseController@addnewcla');
Route::get('/addnewcla', function () {
    return view('addnewcla');
});
