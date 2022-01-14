<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('pregunta1',1000);
            $table->string('pregunta3',1000);
            $table->string('pregunta4',1000);
            $table->string('pregunta5',2000);
            $table->string('pregunta6',1000);
            $table->string('pregunta7',2000);
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
        Schema::dropIfExists('encuestas');
    }
}
