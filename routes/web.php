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
// Route::get('/pizzas', 'PizzaController@index');
// Method 1: add 'auth' midleware to the route
Route::get('/pizzas', 'PizzaController@index')->middleware('auth');
// /create must be above /{id} in order to get correct view by GET method
Route::get('/pizzas/create', 'PizzaController@create');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');
// Route::get('/pizzas/{id}', 'PizzaController@show');
Route::post('/pizzas','PizzaController@store');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');
// Route::delete('/pizzas/{id}', 'PizzaController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
