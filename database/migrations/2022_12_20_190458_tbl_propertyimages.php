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
        Schema::create('tbl_propertyimages', function (Blueprint $table) {
            $table->increments('propertyimage_id');
            $table->integer('property_id');
            $table->string('image_url');
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
        Schema::dropIfExists('tbl_propertyimages');

    }
};
