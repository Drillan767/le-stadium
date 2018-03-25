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
            $table->string('logo');
            $table->string('g_map_key');
            $table->string('background_description');
            $table->text('description');
            $table->string('hours');
            $table->string('location');
            $table->text('gallery');
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
        Schema::drop('stadium');
    }
}