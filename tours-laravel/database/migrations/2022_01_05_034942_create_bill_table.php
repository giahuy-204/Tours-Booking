<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 32);
            $table->bigInteger('phone');
            $table->smallInteger('id_tour');
            $table->date('date_booked');
            $table->smallInteger('adult_number');
            $table->mediumInteger('adult_price');
            $table->smallInteger('children_number');
            $table->mediumInteger('children_price');
            $table->smallInteger('youngchildren_number');
            $table->mediumInteger('youngchildren_price');
            $table->mediumInteger('total_price');
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
        Schema::dropIfExists('bill');
    }
}
