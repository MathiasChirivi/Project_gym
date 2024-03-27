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
        Schema::create('luogo', function (Blueprint $table) {
            $table->id();
            $table->string('Indirizzo');
            $table->string('Città');
            $table->string('Provincia');
            $table->string('CAP');
            $table->string('Nome_Gym');
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
        Schema::dropIfExists('luogo');
    }
};
