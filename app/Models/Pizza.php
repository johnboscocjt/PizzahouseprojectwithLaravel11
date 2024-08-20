<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    //protected  $table = 'some_name'; when you want to override which table the model to connect to.

    protected $casts = [
        'toppings' =>'array', //taking the array and automatically turning it into json string when saing into db, and vice versa
    ] ;
}
