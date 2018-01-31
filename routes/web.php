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

//Route::get('template-practices/view_imagess/{id}', 'TemplateController@view_images');
Route::get('template-practices/add_images/{id}', 'TemplateController@create_image');
Route::post('template-practices/store_image/{id}', 'TemplateController@store_image');


////////////////////
Route::get('triticum','TemplateController@triticum');
Route::get('hordeum','TemplateController@hordeum');
Route::get('avena','TemplateController@avena');
Route::get('secale','TemplateController@secale');
Route::get('zea','TemplateController@zea');

//////// БОБОВИ
Route::get('phaseolus','TemplateController@phaseolus');
Route::get('glycine','TemplateController@glycine');
Route::get('pisum','TemplateController@pisum');
Route::get('lens','TemplateController@lens');
Route::get('cicer','TemplateController@cicer');
Route::get('medicago','TemplateController@medicago');

/////// ТЕХНИЧЕСКИ
Route::get('nicotiana','TemplateController@nicotiana');
Route::get('beta','TemplateController@beta');
Route::get('gossypium','TemplateController@gossypium');
Route::get('helianthus','TemplateController@helianthus');
Route::get('brassica','TemplateController@brassica');
Route::get('arachis','TemplateController@arachis');

/////// ЗЕЛЕНЧУЦИ
Route::get('vegetables','TemplateController@vegetables');
Route::get('potatoes','TemplateController@potatoes');
Route::get('onion','TemplateController@onion');
Route::get('cabbage','TemplateController@cabbage');
Route::get('pumpkin','TemplateController@pumpkin');
Route::get('leafy','TemplateController@leafy');


Route::get('template-practices', 'TemplateController@index');
Route::get('template-practices/introduction','TemplateController@index');
//Route::get('template-practices/triticum-spp','TemplateController@triticum');
//Route::get('template-practices/hordeum-vulgare','TemplateController@hordeum');
//Route::get('template-practices/avena-sativa','TemplateController@avena');
//Route::get('template-practices/secale-cereale','TemplateController@secale');
//Route::get('template-practices/zea-mays','TemplateController@zea');
Route::get('template-practices/rodentia','TemplateController@rodentia');

//////// БОБОВИ
//Route::get('template-practices/phaseolus-vulgaris','TemplateController@phaseolus');
//Route::get('template-practices/glycine-max','TemplateController@glycine');
//Route::get('template-practices/pisum-sativum','TemplateController@pisum');
//Route::get('template-practices/lens-culinaris','TemplateController@lens');
//Route::get('template-practices/cicer-arietinum','TemplateController@cicer');
//Route::get('template-practices/medicago-sativa','TemplateController@medicago');

/////// ТЕХНИЧЕСКИ
//Route::get('template-practices/nicotiana-tabacum','TemplateController@nicotiana');
//Route::get('template-practices/beta-vulgaris','TemplateController@beta');
//Route::get('template-practices/gossypium','TemplateController@gossypium');
//Route::get('template-practices/helianthus-annuus','TemplateController@helianthus');






//Route::resource('culture', 'CultureController');
Route::get('culture', 'CultureController@index');
Route::get('culture/create', 'CultureController@create');
Route::post('culture/store', 'CultureController@store');
Route::get('culture/edit/{id}', 'CultureController@edit');
Route::post('culture/update/{id}', 'CultureController@update');