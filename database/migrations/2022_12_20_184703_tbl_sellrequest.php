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
        Schema::create('tbl_sellrequest', function (Blueprint $table) {
            $table->increments('seller_requestid');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->integer('phone');
            $table->string('country_code');
            $table->string('property_description');
            $table->string('listing_type');
            $table->string('house_type');
            $table->string('full_address');
            $table->string('location');
            $table->string('neighborhood');
            $table->integer('floor')->nullable();
            $table->integer('total_bedrooms')->nullable();
            $table->integer('total_bathrooms')->nullable();
            $table->string('doorman')->nullable();
            $table->string('storage')->nullable();
            $table->string('elevator')->nullable();
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
        Schema::dropIfExists('tbl_sellrequest');
    }
};
