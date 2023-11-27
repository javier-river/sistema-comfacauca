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
        Schema::create('personas', function (Blueprint $table) {
            $table->id(); 

            $table->string('tipoIdentificacion', 45)->notnull();
            $table->integer('numeroIdentificacion')->notnull();
            $table->string('nombre', 45)->notnull();
            $table->integer('telefono')->notnull();
            $table->string('email', 45)->notnull();
            $table->string('direccion', 45)->notnull();

            $table  ->unsignedBigInteger('user_id')->nullable();
            $table  ->foreign('user_id')->references('id')->on('users')
                    ->onDelete('set null');

            $table  ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
