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
        Schema::create('allenamento', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_allenamento');
            $table->date('Data');
            $table->time('Ora_inizio');
            $table->time('Ora_fine');
            $table->text('Descrizione');
            $table->decimal('Durata', 8, 2); // 8 cifre totali, 2 cifre decimali
            $table->integer('Intensita');
            $table->text('Note')->nullable(); // Campo opzionale
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('allenamento');
    }
};
