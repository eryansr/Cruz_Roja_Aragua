<?php

use App\Civil;
use App\Donante;
use App\Hijo;
use App\Nacionalidad;
use App\Sexo;
use Illuminate\Database\Seeder;

class CheckboxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donante::truncate();
        Hijo::truncate();
        Nacionalidad::truncate();
        Sexo::truncate();
        Civil::truncate();

        Nacionalidad::create([
            'nombre' => "V",
            'display_name' => "Venezolano/a",
        ]);

        Nacionalidad::create([
            'nombre' => "E",
            'display_name' => "Extranjero/a",
        ]);

        Sexo::create([
            'nombre' => "F",
            'display_name' => "Femenino",
        ]);

        Sexo::create([
            'nombre' => "M",
            'display_name' => "Masculino",
        ]);

        Civil::create([
            'nombre' => "S",
            'display_name' => "Soltero/a",
        ]);

        Civil::create([
            'nombre' => "C",
            'display_name' => "Casado/a",
        ]);

        Civil::create([
            'nombre' => "V",
            'display_name' => "Viudo/a",
        ]);

        Civil::create([
            'nombre' => "D",
            'display_name' => "Divorciado/a",
        ]);

        Donante::create([
            'nombre' => "Si",
        ]);

        Donante::create([
            'nombre' => "No",
        ]);

        Hijo::create([
            'nombre' => "Si",
        ]);

        Hijo::create([
            'nombre' => "No",
        ]);
    }
}
