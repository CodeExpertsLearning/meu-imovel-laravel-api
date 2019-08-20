<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRealState extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_state', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');

            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->float('price', 10, 2);
            $table->integer('bathrooms');
	        $table->integer('bedrooms');
			$table->integer('property_area');
			$table->integer('total_property_area');
			$table->string('slug');

	        $table->timestamps();

	        $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_state');
    }
}
