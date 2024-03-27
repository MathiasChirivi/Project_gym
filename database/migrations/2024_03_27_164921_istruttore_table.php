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
        Schema::create('istruttore', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Cognome');
            $table->string('Email')->unique();
            $table->string('Specializzazione');
            $table->string('Certificazioni')->nullable();
            $table->integer('Esperienza');
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
        Schema::dropIfExists('istruttore');
    }
};
