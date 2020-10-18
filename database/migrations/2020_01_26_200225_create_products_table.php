<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->text('product_name');
            $table->String('product_slug');            
            $table->String('product_code');
            $table->text('product_summary');
            $table->longText('product_description');
            $table->String('product_color');
            $table->String('product_size');
            $table->integer('product_price');
            $table->String('product_thumbnail')->nullable();
            $table->integer('product_quantity');
            $table->integer('category_id');
            $table->String('subcategory_id');
            $table->integer('product_alert');
            $table->String('product_tags');
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
