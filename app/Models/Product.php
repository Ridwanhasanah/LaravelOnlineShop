<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name',
    	'desc',
    	'short_desc',
    	'price',
    	'discount',
    	'stock',
    	'weight',
    	'sku',
    	'widht',
    	'height'

    ];

    public function category(){

        return $this->belongsToMany('App\Models\Category');
    }

    public function color(){

        return $this->belongsToMany('App\Models\Color');
    }

    public function size(){

        return $this->belongsToMany('App\Models\size');
    }
}
