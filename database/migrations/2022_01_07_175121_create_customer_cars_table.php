<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->dateTime("bought_at")->nullable();
            $table->string('car_name');
            $table->string('car_model');
            $table->string('car_color');
            $table->string('vehicle_identification_number');
            $table->dateTime("received_at")->nullable();
            $table->string('container_number');
            $table->string('bought_place');
            $table->string('buying_price');
            $table->string('transferring_price');
            $table->string('commission');
            $table->string('total_price');
            $table->string('payed_amount');
            $table->dateTime('payed_at');
            $table->string('total_price');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('costumers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_cars');
    }
}
