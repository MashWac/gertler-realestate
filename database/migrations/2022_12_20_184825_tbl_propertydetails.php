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
            $table->integer('seller_id');
            $table->string('property_name');
            $table->string('property_description');
            $table->string('house_type');
            $table->string('listing_type');
            $table->string('full_address');
            $table->string('location');
            $table->string('neighborhood');
            $table->string('land_details')->nullable();
            $table->string('building_details')->nullable();
            $table->string('apartment_details')->nullable();
            $table->integer('starting_price');
            $table->integer('end_price')->nullable();
            $table->integer('floor')->nullable();
            $table->decimal('acreage',11,2)->nullable();
            $table->integer('square_feet')->nullable();
            $table->integer('total_bedrooms')->nullable();
            $table->decimal('total_bathrooms',11,1)->nullable();
            $table->string('mainphoto');
            $table->string('doorman')->nullable();
            $table->string('storage')->nullable();
            $table->string('elavator')->nullable();
            $table->string('washer')->nullable();
            $table->string('natural_lighting')->nullable();
            $table->string('laundry_room')->nullable();
            $table->string('high_ceiling')->nullable();
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
