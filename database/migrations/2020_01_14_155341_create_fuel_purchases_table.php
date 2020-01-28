<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_purchases', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('car_id'); // car using to make the transaction
            $table->double('milleage',15,5);
            $table->integer('fuel_guage_before');
            $table->integer('fuel_guage_after');
            $table->double('cost',10,2);
            $table->decimal('filling_station_gps_coordinates_long',10,7);
            $table->decimal('filling_station_gps_coordinates_lat',10,7);
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
        Schema::dropIfExists('fuel_purchases');
    }
}
