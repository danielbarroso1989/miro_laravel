<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BooksMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->string('nombre');
             $table->text('foto');
             $table->text('foto_dir');
             $table->string('cliente');
             $table->string('derechos');
             $table->string('diseno');
             $table->string('tecnologia');
             $table->text('comentario');
             $table->text('liga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
