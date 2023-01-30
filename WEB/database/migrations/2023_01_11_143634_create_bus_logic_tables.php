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

        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('line_id');
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('chauffeur_id');
            $table->timestamps();
            $table->foreign('bus_id')->references('id')->on('busses')->onDelete('cascade');
            $table->foreign('chauffeur_id')->references('id')->on('people')->onDelete('cascade');
        });

        Schema::create('active_rides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ride_id');
            $table->timestamps();
        });

        Schema::create('ride_has_people', function (Blueprint $table) {
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('active_ride_id')->nullable();
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('active_ride_id')->references('id')->on('active_rides')->nullOnDelete();
        });

        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->float('lat');
            $table->float('lng');
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
        Schema::dropIfExists('rides');
        Schema::dropIfExists('active_rides');
        Schema::dropIfExists('ride_has_people');
        Schema::dropIfExists('stops');
        Schema::dropIfExists('line_has_stops');
    }
};
