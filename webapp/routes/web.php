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
    return view('auth/login');
});

Route::get('/catalog', 'CatalogController@index');

Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');


//

Route::resource('/provider', 'ProviderController');
Route::get('/provider/dataTable', 'ProviderController@indexDataTable');
Route::get('/provider/create', 'ProviderController@create');
<<<<<<< HEAD

Route::resource('/product', 'ProductController');
Route::get('/product/dataTable', 'ProductController@indexDataTable');
Route::get('/product/create', 'ProductController@create');
=======
Auth::routes();
Route::auth();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 70127403bd5664ec6f00e1ad5a7895a6acb66e86
