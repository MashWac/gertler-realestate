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
        Schema::create('tbl_rentrequest', function (Blueprint $table) {
            $table->increments('rent_requestid');
            $table->integer('property_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('country_code');
            $table->integer('phone');
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
        Schema::dropIfExists('tbl_rentrequest');
    }
};
