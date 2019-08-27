<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesCountriesStatesCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('initials');
            $table->timestamps();
        });

        Schema::create('states', function(Blueprint $table) {
	        $table->bigIncrements('id');
	        $table->unsignedBigInteger('country_id');

	        $table->string('name');
	        $table->string('slug');
	        $table->string('initials');
	        $table->timestamps();

	        $table->foreign('country_id')->references('id')->on('countries');
        });

	    Schema::create('cities', function(Blueprint $table) {
		    $table->bigIncrements('id');
		    $table->unsignedBigInteger('state_id');

		    $table->string('name');
		    $table->string('slug');

		    $table->timestamps();

		    $table->foreign('state_id')->references('id')->on('states');
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
	    Schema::dropIfExists('states');
	    Schema::dropIfExists('countries');
    }
}
