<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('category_id');
            $table->text('summary');
            $table->String('f_image');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
