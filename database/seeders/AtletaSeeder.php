<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AtletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atleti = config('atleti');

        foreach ($atleti as $atletaData) {
            $atleta = new User();
            $atleta->name = $atletaData['name'];
            $atleta->Cognome = $atletaData['Cognome'];
            $atleta->data_nascita = $atletaData['data_nascita'];
            $atleta->email = $atletaData['email'];
            $atleta->password = Hash::make($atletaData['password']);
            $atleta->Peso = $atletaData['Peso'];
            $atleta->Altezza = $atletaData['Altezza'];
            $atleta->Obiettivo_Allenamento = $atletaData['Obiettivo_Allenamento'];
            $atleta->save();
        }
    }
}
