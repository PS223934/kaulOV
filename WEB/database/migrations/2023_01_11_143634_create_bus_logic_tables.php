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
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->string('destination_A');
            $table->string('destination_B');
            $table->timestamps();
        });

        Schema::create('busses', function (Blueprint $table) {
            $table->id();
            $table->string('plate')->unique();
            $table->timestamps();
        });

        Schema::create('bus_active_line', function (Blueprint $table) {
            $table->foreignId('line_id');
            $table->foreignId('bus_id')->unique();
            $table->foreignId('user_id')->unique();
            $table->timestamps();
        });

        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->timestamps();
        });

        Schema::create('line_has_stops', function (Blueprint $table) {
            $table->foreignId('line_id');
            $table->foreignId('stop_id');
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
        Schema::dropIfExists('lines');
        Schema::dropIfExists('busses');
        Schema::dropIfExists('bus_active_line');
        Schema::dropIfExists('stops');
        Schema::dropIfExists('line_has_stops');
    }
};
