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

        return view('pizzas.index',['pizzas'=>$pizzas]);        
    }
    public function show($id){
        $pizza=Pizza::findOrFail($id);
        // $pizza=Pizza::find($id);
        return view('pizzas.show',['pizza'=>$pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
    public function store(){
        /* error_log($name=request('name'));
        error_log($type=request('type'));
        error_log($base=request('base')); */
        $pizza=new Pizza();
        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        // error_log($pizza); // {"name":"as","type":"margherita","base":"cheesy crust"}
        // return request('toppings'); // ["peppers","garlics","olives"] -> array rather than json -> setting in Pizza model
        $pizza->toppings=request('toppings');
        $pizza->save();
        return redirect('/')->with('msg','Thanks for ordering'); // send session data to '/'
    }
    public function destroy($id){
        $pizza=Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
