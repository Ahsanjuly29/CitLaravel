<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('state_id');
            $table->String('state_code');
            $table->String('country_id');
            $table->String('country_code');
            $table->String('latitude');
            $table->String('longitude');
            $table->timestamps();
            $table->String('flag');
            $table->String('wikiDataId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
