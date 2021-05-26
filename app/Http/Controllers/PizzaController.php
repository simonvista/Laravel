<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
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
    }
    public function show($id){
        return view('details',['id'=>$id]);
    }
}
