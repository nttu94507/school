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
Route::group(['prefix' => 'school'], function () {


});
    Route::get('/', function () {
        // return view('welcome');
        return redirect('choose');
    });
    Route::get('/choose','PostchooseController@getall')->name('show_stu');
    Route::post('/choose','PostchooseController@adddate');
    Route::get('/choose/delete/{id}','PostchooseController@delete');
    Route::get('/choose/{id}','PostchooseController@updateForm');
    Route::post('/choose/update','PostchooseController@update');
    Route::post('/addnewstu','PostchooseController@addnewstu')->name('add_stu');
    Route::get('/addnewstu', function () {
        return view('addnewstu');
    });
    Route::post('/addnewcla','PostchooseController@addnewcla');
    Route::get('/addnewcla', function () {
        return view('addnewcla');
    });

    Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
