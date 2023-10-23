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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_alumno');
            $table->date('fecha_registro')->useCurrent();
            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_curso')->references('id')->on('cursos');
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
        Schema::dropIfExists('matriculas');
    }
};
