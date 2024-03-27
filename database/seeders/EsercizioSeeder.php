<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Esercizio;
use Illuminate\Support\Facades\Hash;

class EsercizioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $esercizi = config('esercizi');

        foreach ($esercizi as $esercizioData) {
            $esercizio = new Esercizio();
            $esercizio->Nome_esercizio = $esercizioData['Nome'];
            $esercizio->Descrizione = $esercizioData['Descrizione'];
            $esercizio->Gruppo_muscolare_coinvolto = $esercizioData['Gruppo_muscolare_coinvolto'];
            $esercizio->Difficoltà = $esercizioData['Difficoltà'];
            $esercizio->Attrezzatura_richiesta = $esercizioData['Attrezzatura_richiesta'];
            $esercizio->Foto_esercizio = $esercizioData['Foto_esercizio'];
            $esercizio->save();
        }
    }
}
