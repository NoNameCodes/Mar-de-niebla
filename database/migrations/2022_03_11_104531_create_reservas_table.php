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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('phone');
            $table->string('coments');
            $table->timestamps();
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('location_id');
            // $table->unsignedBigInteger('resource_id');
            
            $table->foreignId('location_id')->constrained('locations')
            ->OnDelete('cascade');
            $table->foreignId('user_id')->constrained('users')
            ->OnDelete('cascade');
            $table->foreignId('resource_id')->constrained('resources')
            ->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
