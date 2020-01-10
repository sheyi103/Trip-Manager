<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers_log', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id'); //driver making transaction
            $table->string('journey_to')->nullable();
            $table->string('journey_from')->nullable();
            $table->integer('initial_kilometer')->default(0);
            $table->integer('final_kilometer')->nullable();
            $table->integer('total_kilometer_covered')->nullable();
            $table->string('petrol_position')->nullable();
            $table->string('petrol_purchases')->nullable();
            $table->string('oil_purchases')->nullable();
            $table->string('officers_remarks_and_initials')->nullable();
            $table->string('status')->default('initiated');  //initiated, Completed and payment failed, 
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
        Schema::dropIfExists('drivers_log');
    }
}
