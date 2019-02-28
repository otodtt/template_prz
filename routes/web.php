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

////// Препарати
Route::get('products/acaricides','GetProductsController@acaricides');
Route::get('products/acaricides/{id}','GetProductsController@show_acaricide');

Route::get('products/nematocides','GetProductsController@nematocides');
Route::get('products/nematocides/{id}','GetProductsController@show_nematocide');

Route::get('products/limatsides','GetProductsController@limatsides');
Route::get('products/limatsides/{id}','GetProductsController@show_limatside');

////// Препарати


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
Route::get('deactivated', 'PesticidesController@deactivated');

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

/////// Добавяне на дози към култури //////
Route::get('acaricides/dose_crop/{id}/{pest}', 'AcaricidesController@dose_crop');
Route::post('acaricides/crop_dose_store/{id}/{pest}', 'AcaricidesController@dose_crop_store');

/// Деактивиране на една доза
Route::get('acaricides/deactivate_one_dose/{dose}/{pest}', 'AcaricidesController@deactivate_one');
Route::post('acaricides/deactivate_one_store/{dose}/{pest}', 'AcaricidesController@deactivate_one_store');
Route::get('acaricides/deactivate/{id}', 'AcaricidesController@deactivate');
Route::post('acaricides/deactivate_store/{id}', 'AcaricidesController@deactivate_store');
/////// Добавяне на дози към култури //////


// CROPS
Route::get('crops', 'CropsController@index');
Route::get('crops/create', 'CropsController@create');
Route::post('crops/store', 'CropsController@store');
Route::get('crops/show/{id}', 'CropsController@show');
Route::get('crops/edit/{id}', 'CropsController@edit');
Route::post('crops/update/{id}', 'CropsController@update');

// ACARICIDES
Route::get('crops/acaricides/{id}', 'CropsController@acaricides');
//Route::post('crops/acaricides_store/{id}', 'CropsController@acaricides_store');
Route::get('crops/acaricides_edit/{id}/{crop}', 'CropsController@acaricides_edit');
Route::post('crops/acaricides_update/{id}', 'CropsController@acaricides_update');

Route::get('crops/nematocides_edit/{id}/{crop}', 'CropsController@nematocides_edit');
Route::post('crops/nematocides_update/{id}', 'CropsController@nematocides_update');

Route::get('crops/limatsides_edit/{id}/{crop}', 'CropsController@limatsides_edit');
Route::post('crops/limatsides_update/{id}', 'CropsController@limatsides_update');

// PARALLEL
Route::get('parallel', 'ParallelController@index');
Route::get('parallel/create', 'ParallelController@create');
Route::post('parallel/store', 'ParallelController@store');
Route::get('parallel/edit/{id}', 'ParallelController@edit');
Route::post('parallel/update/{id}', 'ParallelController@update');
Route::get('products/parallel','ParallelController@get_parallel');

// НЕМАТОЦИДИ
Route::get('nematocides', 'NematocidesController@index');
Route::get('nematocides/create', 'NematocidesController@create');
Route::post('nematocides/store', 'NematocidesController@store');
Route::get('nematocides/{id}', 'NematocidesController@show');
Route::get('nematocides/edit/{id}', 'NematocidesController@edit');
Route::post('nematocides/update/{id}', 'NematocidesController@update');

Route::get('nematocides/substances/{id}', 'NematocidesController@substances');
Route::post('nematocides/subs_add/{id}', 'NematocidesController@subs_add');
Route::get('nematocides/substances_edit/{id}/{pest}', 'NematocidesController@substances_edit');
Route::post('nematocides/subs_update/{id}/{pest}', 'NematocidesController@subs_update');

Route::get('nematocides/dose/{id}', 'NematocidesController@dose');
Route::post('nematocides/dose_add/{id}', 'NematocidesController@dose_add');
Route::get('nematocides/dose_edit/{id}/{pest}', 'NematocidesController@dose_edit');
Route::post('nematocides/dose_update/{id}/{pest}', 'NematocidesController@dose_update');

/////// Добавяне на дози към култури //////
Route::get('nematocides/dose_crop/{id}/{pest}', 'NematocidesController@dose_crop');
Route::post('nematocides/crop_dose_store/{id}/{pest}', 'NematocidesController@dose_crop_store');

/// Деактивиране на една доза
Route::get('nematocides/deactivate_one_dose/{dose}/{pest}', 'NematocidesController@deactivate_one');
Route::post('nematocides/deactivate_one_store/{dose}/{pest}', 'NematocidesController@deactivate_one_store');
Route::get('nematocides/deactivate/{id}', 'NematocidesController@deactivate');
Route::post('nematocides/deactivate_store/{id}', 'NematocidesController@deactivate_store');
/////// Добавяне на дози към култури //////

// ЛИМАЦИДИ
Route::get('limatsides', 'LimatsidesController@index');
Route::get('limatsides/create', 'LimatsidesController@create');
Route::post('limatsides/store', 'LimatsidesController@store');
Route::get('limatsides/{id}', 'LimatsidesController@show');
Route::get('limatsides/edit/{id}', 'LimatsidesController@edit');
Route::post('limatsides/update/{id}', 'LimatsidesController@update');

Route::get('limatsides/substances/{id}', 'LimatsidesController@substances');
Route::post('limatsides/subs_add/{id}', 'LimatsidesController@subs_add');
Route::get('limatsides/substances_edit/{id}/{pest}', 'LimatsidesController@substances_edit');
Route::post('limatsides/subs_update/{id}/{pest}', 'LimatsidesController@subs_update');

Route::get('limatsides/dose/{id}', 'LimatsidesController@dose');
Route::post('limatsides/dose_add/{id}', 'LimatsidesController@dose_add');
Route::get('limatsides/dose_edit/{id}/{pest}', 'LimatsidesController@dose_edit');
Route::post('limatsides/dose_update/{id}/{pest}', 'LimatsidesController@dose_update');

/////// Добавяне на дози към култури //////
Route::get('limatsides/dose_crop/{id}/{pest}', 'LimatsidesController@dose_crop');
Route::post('limatsides/crop_dose_store/{id}/{pest}', 'LimatsidesController@dose_crop_store');

/// Деактивиране на една доза
Route::get('limatsides/deactivate_one_dose/{dose}/{pest}', 'LimatsidesController@deactivate_one');
Route::post('limatsides/deactivate_one_store/{dose}/{pest}', 'LimatsidesController@deactivate_one_store');
Route::get('limatsides/deactivate/{id}', 'LimatsidesController@deactivate');
Route::post('limatsides/deactivate_store/{id}', 'LimatsidesController@deactivate_store');
/////// Добавяне на дози към култури //////



