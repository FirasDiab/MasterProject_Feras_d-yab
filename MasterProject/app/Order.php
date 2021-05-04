<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['user_id','fname','lname','email','mobile','country','city','postal','address','cart','state'];


}
