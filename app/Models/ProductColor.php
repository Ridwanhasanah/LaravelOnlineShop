<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $fillable = ['color_id', 'product_id'];
        
    public $timestamps = false;
}
