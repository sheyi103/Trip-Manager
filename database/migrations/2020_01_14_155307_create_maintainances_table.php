<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintainancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintainances', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('car_id'); // car using to make the transaction
            $table->integer('workshop_id');
            $table->double('milleage',15,5);
            $table->double('maintainance_cost',10,2);
            $table->decimal('maintainance_gps_coordinates_long',10,7)->nullable();
            $table->decimal('maintainance_gps_coordinates_lat',10,7)->nullable();
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
        Schema::dropIfExists('maintainances');
    }
}
