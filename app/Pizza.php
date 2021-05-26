<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // toppings will be saved as json to DB, topping will be retrieved as array from DB.
    protected $casts=[
        'toppings'=>'array'
    ];
}
