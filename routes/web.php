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
    $pizzas=[
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']       
    ];
    // query parameters
    return view('pizzas',['pizzas'=>$pizzas,'name'=>request('name'),'age'=>request('age')]);
    // return view('pizzas',['type'=>'hawaiin','base'=>'cheesy crust']);
    // return 'pizzas';
    // return ["name"=>"veg pizzas",'base'=>'classic'];
});
Route::get('/pizzas/{id}', function ($id) {
    // use $id to query DB for record    
    return view('details',['id'=>$id]);
    
});
