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
        Schema::create('tbl_locations', function (Blueprint $table) {
            $table->increments('location_id');
            $table->string('name');
            $table->string('county');
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
        Schema::dropIfExists('tbl_locations');
    }
};
