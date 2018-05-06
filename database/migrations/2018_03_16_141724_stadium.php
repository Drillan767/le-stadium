<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stadium extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('stadium', function (Blueprint $table) {
            $table->increments('id');
            $table->string('landing_image');
            $table->string('g_map_key');
            $table->string('background_description');
            $table->string('today_special');
            $table->string('today_price');
            $table->text('description');
            $table->string('hours');
            $table->string('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stadium');
    }
}