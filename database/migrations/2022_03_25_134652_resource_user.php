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
        Schema::create('resource_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('resource_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('resource_id')->references('id')->on('resources')->OnDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resource_user');

    }
};
