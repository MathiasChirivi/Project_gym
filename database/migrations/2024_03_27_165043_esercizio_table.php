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
        Schema::create('esercizio', function (Blueprint $table) {
            $table->id();
            $table->string('Nome_esercizio');
            $table->text('Descrizione');
            $table->string('Gruppo_muscolare_coinvolto');
            $table->integer('Difficoltà');
            $table->string('Attrezzatura_richiesta');
            $table->string('Foto_esercizio')->nullable(); // Campo opzionale per il percorso dell'immagine
            $table->timestamps(); // Aggiunge i campi created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esercizio');
    }
};
