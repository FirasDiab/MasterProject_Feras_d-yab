<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['fname','lname','email','mobile','country','city','postal','address','cart'];

}
