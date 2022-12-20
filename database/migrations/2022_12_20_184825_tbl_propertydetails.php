<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_propertydetails', function (Blueprint $table) {
            $table->increments('property_id');
            $table->string('property_name');
            $table->string('property_description');
            $table->string('house_type');
            $table->string('listing_type');
            $table->string('full_address');
            $table->string('location');
            $table->string('neighborhood');
            $table->string('land_details');
            $table->string('building_details');
            $table->string('apartment_details');
            $table->integer('starting_price');
            $table->integer('end_price');
            $table->integer('floor');
            $table->integer('acreage');
            $table->integer('total_bedrooms');
            $table->string('mainphoto');
            $table->string('doorman');
            $table->string('storage');
            $table->string('elavator');
            $table->string('washer');
            $table->string('natural_lighting');
            $table->string('laundry_room');
            $table->string('high_ceiling');
            $table->string('pet_policy');
            $table->timestamp('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('is_deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_propertydetails');
    }
};
