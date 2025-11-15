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
        Schema::create('curriculum', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('teléfono', 10);
            $table->string('correo', 100);
            $table->date('fecha_nacimiento', 100);
            $table->decimal('nota_media', 6, 2);
            $table->text('experiencia');
            $table->text('formación');
            $table->text('habilidades');
            $table->string('image', 100) ->nullable();
            $table->string('pdf', 100) ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('curriculum');
    }
};
