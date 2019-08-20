<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRealStatePhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_state_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('real_state_id');

            $table->string('photo');
            $table->boolean('is_thumb');

            $table->timestamps();

            $table->foreign('real_state_id')->references('id')->on('real_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_state_photos');
    }
}
