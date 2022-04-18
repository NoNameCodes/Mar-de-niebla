<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date')->format;
            $table->string('phone');
            $table->string('coments')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users', 'id')
                ->cascadeOnDelete();
            $table->foreignId('resource_id')->constrained('resources', 'id')
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
