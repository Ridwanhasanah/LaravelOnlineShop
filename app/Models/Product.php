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
}
