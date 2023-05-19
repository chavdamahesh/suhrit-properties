<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('for');
            $table->string('type');
            $table->string('email');
            $table->integer('phone')->unique();
            $table->string('short_desc');
            $table->string('location');
            $table->integer('price');
            $table->integer('floor');
            $table->integer('total_area_int');
            $table->integer('total_area_ext');
            $table->integer('year_built');
            $table->integer('garage_no');
            $table->integer('no_bath');
            $table->integer('no_bedrooms');
            $table->string('orientation');
            $table->tinyInteger('lift');
            $table->tinyInteger('security_door');
            $table->tinyInteger('double_glazing');
            $table->tinyInteger('garage');
            $table->tinyInteger('garden');
            $table->tinyInteger('parking');
            $table->tinyInteger('terrase');
            $table->string('garden_terrace_orientation');
            $table->string('charges');
            $table->string('energy_efficiency');
            $table->integer('year_reno');
            $table->integer('no_outdoor_parking_spots');
            $table->string('kitchen_type');
            $table->string('key_feature_1');
            $table->string('key_feature_2');
            $table->string('key_feature_3');
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
        Schema::dropIfExists('registrations');
    }
}
