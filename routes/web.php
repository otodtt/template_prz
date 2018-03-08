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

/////// Съоражения
Route::get('solanum','TemplateController@solanum');
Route::get('cucurbitaceae','TemplateController@cucurbitaceae');
Route::get('decorate','TemplateController@decorate');
Route::get('capsicum','TemplateController@capsicum');
Route::get('facilities','TemplateController@facilities');

/////// Овощни
Route::get('seed','TemplateController@seed');
Route::get('stone','TemplateController@stone');

/////// Ягодоплодни
Route::get('fragaria','TemplateController@fragaria');
Route::get('rubus','TemplateController@rubus');
Route::get('nigrum','TemplateController@nigrum');

/////// Лоза
Route::get('vitis','TemplateController@vitis');





//Route::resource('culture', 'CultureController');
Route::get('culture', 'CultureController@index');
Route::get('culture/create', 'CultureController@create');
Route::post('culture/store', 'CultureController@store');
Route::get('culture/edit/{id}', 'CultureController@edit');
Route::post('culture/update/{id}', 'CultureController@update');



Route::get('manufacturers', 'ManufacturersController@index');
Route::get('manufacturers/create', 'ManufacturersController@create');
Route::get('manufacturers/{id}', 'ManufacturersController@show');
Route::post('manufacturers/store', 'ManufacturersController@store');



Route::get('products', 'PesticidesController@index');

Route::get('acaricides', 'AcaricidesController@index');
Route::get('acaricides/create', 'AcaricidesController@create');
Route::post('acaricides/store', 'AcaricidesController@store');
Route::get('acaricides/{id}', 'AcaricidesController@show');
Route::get('acaricides/edit/{id}', 'AcaricidesController@edit');
Route::post('acaricides/store', 'AcaricidesController@store');
Route::post('acaricides/update/{id}', 'AcaricidesController@update');
Route::get('acaricides/substances/{id}', 'AcaricidesController@substances');
Route::post('acaricides/subs_add/{id}', 'AcaricidesController@subs_add');

Route::get('acaricides/substances_edit/{id}/{pest}', 'AcaricidesController@substances_edit');
Route::post('acaricides/subs_update/{id}/{pest}', 'AcaricidesController@subs_update');

Route::get('acaricides/dose/{id}', 'AcaricidesController@dose');
Route::post('acaricides/dose_add/{id}', 'AcaricidesController@dose_add');
Route::get('acaricides/dose_edit/{id}/{pest}', 'AcaricidesController@dose_edit');
Route::post('acaricides/dose_update/{id}/{pest}', 'AcaricidesController@dose_update');


Route::get('substances', 'SubstancesController@index');
Route::get('substances/create', 'SubstancesController@create');
Route::post('substances/store', 'SubstancesController@store');
Route::get('substances/{id}', 'SubstancesController@show');
Route::get('substances/add/{id}', 'SubstancesController@add');
Route::post('substances/store_add/{id}', 'SubstancesController@store_add');
