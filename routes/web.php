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

Route::get('/akib', function () {
    return('This is Akib Al-Amin');
});

Route::get('login/{name}/{id?}', 'bariwalaLogin@login');

Route::get('register/', 'bariwalaRegister@Register');
Route::post('signup/', 'bariwalaRegister@signUp');

Route::get('calculator/', 'calculator@getcal');
Route::post('calculator/', 'calculator@calculator');

Route::get('info/', 'bariwalaInfo@getBariwalainfo');
Route::post('info/', 'bariwalaInfo@bariwalaInfo');
Route::post('viewinfo/', 'bariwalaInfo@saveBariwala');
Route::get('viewinfo/', 'bariwalaInfo@getBariwala');

Route::get('editbariwala/{id}', 'bariwalaInfo@editbariwala');

Route::post('update_viewinfo', 'bariwalaInfo@update_editbariwala');

Route::get('manage_category', 'HomeController@ManageCategory');
Route::get('categoryAdd', 'HomeController@AddCategory');
Route::post('save_category', 'HomeController@SaveCategory');
Route::get('delete_category/{id}', 'HomeController@DeleteCategory');
Route::get('view_update_category/{id}', 'HomeController@GetUpdateCategory');
Route::post('update_category', 'HomeController@UpdateCategory');


Route::get('manage_floor', 'FloorController@ManageFloor');
Route::get('FloorAdd', 'FloorController@AddFloor');
Route::post('save_floor', 'FloorController@SaveFloor');
Route::get('delete_floor/{id}', 'FloorController@DeleteFloor');
Route::get('view_update_floor/{id}', 'FloorController@GetUpdateFloor');
Route::post('update_floor', 'FloorController@UpdateFloor');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
