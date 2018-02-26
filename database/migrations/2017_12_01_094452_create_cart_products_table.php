<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_products', function (Blueprint $table) {

             $table->integer('cart_id')->unsigned();
             $table->foreign('cart_id')
             ->references('id')->on('carts')
             ->onDelete('cascade')
             ->onUpdate('cascade');


             $table->integer('product_id')->unsigned();
             $table->foreign('product_id')
             ->references('id')->on('products')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_products');
    }
}
