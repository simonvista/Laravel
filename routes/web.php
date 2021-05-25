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
Route::get('/pizzas', function () {
    // Normally, get data from DB.
    // pass data to view
    $pizza=[
        'type'=>'hawaiin',
        'base'=>'cheesy crust',
        'price'=>21
    ];
    return view('pizzas',$pizza);
    // return view('pizzas',['type'=>'hawaiin','base'=>'cheesy crust']);
    // return 'pizzas';
    // return ["name"=>"veg pizzas",'base'=>'classic'];
});
