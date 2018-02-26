<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function products(){

    	return $this->belongsToMany(Product::class, 'product_categories');//('App\Models\Product');
    }
}
