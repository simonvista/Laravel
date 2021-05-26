<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Pizza model
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        // $pizzas=Pizza::all();
        // $pizzas=Pizza::orderBy('name','desc')->get();
        // $pizzas=Pizza::where('type','hawaiian')->get();
        $pizzas=Pizza::latest()->get(); // list the latest created_at

        return view('pizzas',['pizzas'=>$pizzas]);        
    }
    public function show($id){
        return view('details',['id'=>$id]);
    }
}
