<?php

use App\Models\UserCredit;
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
        Schema::create('user_credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->integer('credit');
            $table->timestamps();
        });

        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->string('gateway_url');
            $table->timestamps();
        });

        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('increase');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id', 32)->index()->unique();
            $table->unsignedBigInteger('type_id'); //types: topup, spent, refunded,
            $table->foreignId('vendor_id');
            $table->string('amount');
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('transaction_types');
        });

        Schema::create('person_has_transactions', function (Blueprint $table) {
            $table->foreignId('person_id');
            $table->string('transaction_id')->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_credits');
        Schema::dropIfExists('vendors');
        Schema::dropIfExists('transactions');
    }
};
