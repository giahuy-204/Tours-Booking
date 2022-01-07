<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('name')->unique();
            $table->string('short_description');
            $table->string('date_start');
            $table->integer('number_days');
            $table->integer('seats');
            $table->integer('adult_price');
            $table->integer('children_price');
            $table->integer('youngchildren_price');
            $table->string('long_description');
            $table->integer('id_type');
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
        Schema::dropIfExists('tours');
    }
}
