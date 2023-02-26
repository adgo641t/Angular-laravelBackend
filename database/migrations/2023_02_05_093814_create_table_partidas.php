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
        Schema::dropIfExists('partidas');
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->integer('juego')->foreignId('Juego')->constrained('juegos');
            $table->integer('jugadores');
            $table->date('fecha');
            $table->string('hora');
            $table->string('ganador');
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
        Schema::dropIfExists('table_partidas');
    }
};
