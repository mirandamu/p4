<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_trip', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->integer('tag_id')->unsigned();
            $table->integer('trip_id')->unsigned();

            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('trip_id')->references('id')->on('trips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tag_trip');
    }
}
