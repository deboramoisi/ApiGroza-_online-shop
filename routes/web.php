<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('welcome');
// });


// Rute pentru fiecare CATEGORIE PRODUSE si alte PRODUSE
Route::get('/produse', 'ProductController@produse')->name('produse');
Route::get('/produs/{id}', 'ProductController@product_id')->name('produs');
Route::get('/produse_apicole', 'ProductController@produse_apicole')->name('produse_apicole');
Route::get('/produse_cosmetice', 'ProductController@produse_cosmetice')->name('produse_cosmetice');
Route::get('/produse_echipamente', 'ProductController@produse_echipamente')->name('produse_echipamente');
Route::get('/produse_matci', 'ProductController@produse_matci')->name('produse_matci');
Route::get('/produse_familii', 'ProductController@produse_familii')->name('produse_familii');

// CATEGORII
Route::get('/categorii', 'ProductController@categorii')->name('categorii');

// Rute AUTENTIFICARE
Auth::routes();

// HOME
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about_us', 'HomeController@about_us')->name('about_us');


// Just authenticated users
Route::group(['middleware' => 'auth'], function() {
	Route::get('/', 'ProductController@produse'); //afisare lista produse pe pagina de start
	Route::resource('products', 'ProductController'); // ruta de resurse va genera CRUD-uri
	// CHECKOUT
	Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');
	// Sumar Comanda
	Route::get('/sumar_comanda', 'ProductController@sumarComanda')->name('sumar_comanda');
});


// ADD TO CART
Route::get('/add_to_cart/{id}', 'ProductController@getAddToCart')->name('addToCart');
// GOLIRE COS
Route::get('/remove_cart', 'ProductController@getRemoveCart')->name('remove_cart');
// Stergere ELEMENT COS
Route::get('/remove_product/{id}', 'ProductController@getRemoveProduct')->name('remove');
// Reduce By One
Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('reduce');
// Increase By One
Route::get('/increase/{id}', 'ProductController@getIncreaseByOne')->name('increase');
// CART
Route::get('/shopping_cart', 'ProductController@getCart')->name('shopping_cart');
