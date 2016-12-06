<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->date('departure_date');
            $table->time('departure_time')->nullable();;
            $table->date('return_date');
            $table->time('return_time')->nullable();;
            $table->string('origin');
            $table->string('destination');
            $table->string('airline')->nullable();
            $table->string('flight_confirmation')->nullable();
            $table->string('departure_flight_number')->nullable();
            $table->string('return_flight_number')->nullable();
            $table->string('accomodation_name')->nullable();
            $table->string('accomodation_address')->nullable();
            $table->string('purpose');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trips');
    }
}
