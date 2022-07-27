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
        Schema::create('appoiments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId( "user_id")->nullable();
            $table->foreignId( "service_id")->nullable();
            $table->string( "date")->nullable();
            $table->string("time")->nullable();
            $table->string( "price")->nullable();
            $table->string( "payment")->nullable();
            $table->string('note',100)->nullable();
            $table->string('ip',100)->nullable();
            $table->string('status',5)->nullable()->default('new');
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
        Schema::dropIfExists('appoiments');
    }
};
