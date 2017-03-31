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
    return view('welcome');
});

//Route::get('/template-practices', function () {
//    return view('templates.index');
//});


Route::get('template-practices/show-culture', 'TemplateController@show_culture');
Route::get('template-practices/create', 'TemplateController@create');
Route::post('template-practices/store', 'TemplateController@store');
Route::get('template-practices/edit/{id}', 'TemplateController@edit');
Route::post('template-practices/update/{id}', 'TemplateController@update');

Route::get('template-practices', 'TemplateController@index');
Route::get('template-practices/introduction','TemplateController@index');
Route::get('template-practices/triticum-spp','TemplateController@triticum');
Route::get('template-practices/hordeum-vulgare','TemplateController@hordeum');

//Route::resource('culture', 'CultureController');
Route::get('culture', 'CultureController@index');
Route::get('culture/create', 'CultureController@create');
Route::post('culture/store', 'CultureController@store');
Route::get('culture/edit', 'CultureController@edit');