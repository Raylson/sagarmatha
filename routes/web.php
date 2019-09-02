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

Route::get('/', 'FrontendController@index');
Route::get('/page/{slug}', 'FrontendController@page');
Route::get('/products', 'FrontendController@products');
Route::get('/product/{slug}', 'FrontendController@productDetail');
Route::get('/gallery', 'FrontendController@gallery');
Route::get('/contact', 'FrontendController@contact');
Route::post('/submit_contact', 'FrontendController@submitContact');


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
