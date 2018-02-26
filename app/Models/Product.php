<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
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

    public function categories(){

        return $this->belongsToMany(Category::class, 'product_categories');//,'product_categories');
    }

    public function colors(){

        return $this->belongsToMany('App\Models\Color');
    }

    public function sizes(){

        return $this->belongsToMany('App\Models\size');
    }
}
