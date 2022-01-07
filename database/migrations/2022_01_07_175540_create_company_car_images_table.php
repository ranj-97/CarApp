<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyCarImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_car_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_cars_id');
            $table->string('image');
            $table->timestamps();
            $table->foreign('company_cars_id')->references('id')->on('company_cars');

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
        Schema::dropIfExists('company_car_images');
    }
}
