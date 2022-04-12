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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description', 255);
            $table->string('img');
            $table->boolean('reserved')->default(0);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('location_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('reserve_id')->references('id')->on('reservas')->onDdelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources');
    }
};
