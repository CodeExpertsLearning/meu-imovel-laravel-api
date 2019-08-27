<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('state_id');
	        $table->unsignedBigInteger('city_id');

            $table->string('address');
            $table->integer('number');
            $table->string('neighborhood');
            $table->string('complement')->nullable();
            $table->integer('zip_code');

            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states');
	        $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
