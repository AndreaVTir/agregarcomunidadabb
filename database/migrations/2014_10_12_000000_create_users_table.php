<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVecinosTable extends Migration
{
    //Run the migrations.
     
    public function up()
    {
        Schema::create('vecinos', function (Blueprint $table) {
            $table->id('id_vecino');
            $table->string('Nombre');
            $table->string('Escalera');
            $table->string('Piso');
            $table->string('Puerta');
            $table->foreignId('id_comunidad')->constrained('comunidades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    // Reverse the migrations.
    
    public function down()
    {
        Schema::dropIfExists('vecinos');
    }
};
