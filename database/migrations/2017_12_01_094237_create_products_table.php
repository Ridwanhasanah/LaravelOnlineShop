<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('img_gallery')->nullable();
            $table->string('desc')->nullable();
            $table->string('short_desc')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('stock')->nullable();
            $table->float('weight')->nullable();
            $table->string('sku')->nullable();
            $table->integer('widht')->nullable();
            $table->integer('height')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
