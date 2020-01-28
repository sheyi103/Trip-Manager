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
            $table->Increments('id');
            $table->integer('user_id'); //driver making transaction
            $table->double('start_trip_milleage')->nullable();
            $table->integer('start_trip_fuel_guage')->nullable();
            $table->string('start_trip_time');
            $table->decimal('start_trip_gps_coordinates_long',10,7);
            $table->decimal('start_trip_gps_coordinates_lat',10,7);
            $table->string('passenger_name')->nullable();
            $table->double('end_trip_milleage')->nullable();
            $table->integer('end_trip_fuel_guage')->nullable();
            $table->string('end_trip_time')->nullable();
            $table->decimal('end_trip_gps_coordinates_long',10,7)->nullable();
            $table->decimal('end_trip_gps_coordinates_lat',10,7)->nullable();
            $table->integer('toll_balance')->nullable();
            $table->string('remarks')->nullable();
            $table->tinyInteger('trip_status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('trips');
    }
}
