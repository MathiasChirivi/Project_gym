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
        Schema::create('allenamento_esercizio', function (Blueprint $table) {
            $table->unsignedBigInteger('allenamento_id');
            $table->unsignedBigInteger('esercizio_id');

            $table->integer('Serie');
            $table->integer('Ripetizioni');
            $table->decimal('Peso', 8, 2); // 8 cifre totali, 2 cifre decimali
            $table->integer('Tempo')->nullable(); // Campo opzionale

            $table->foreign('allenamento_id')->references('id')->on('allenamento');
            $table->foreign('esercizio_id')->references('id')->on('esercizio');

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
        Schema::dropIfExists('allenamento_esercizio');
    }
};
