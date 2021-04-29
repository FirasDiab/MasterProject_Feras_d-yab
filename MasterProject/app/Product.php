<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name','size','category_id', 'color','image', 'desc' , 'price'];

    public function category(){

        return $this->belongsTo('App\Category');

    }
}
