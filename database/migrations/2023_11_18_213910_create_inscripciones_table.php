<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
    
            $table->boolean('entrevista');
            $table->boolean('pagoInscripcion');
            $table->boolean('pagoMatricula');
    
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id', 'inscripciones_persona_id_foreign')
                ->references('id')->on('personas')
                ->onDelete('set null');

            $table->unsignedBigInteger('sede_id')->nullable();
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('set null');
        
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};

