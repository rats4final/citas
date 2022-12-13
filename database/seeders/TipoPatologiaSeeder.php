<?php

namespace Database\Seeders;

use App\Models\TipoPatologia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPatologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombre_patologia' => 'Gastritis',
                'desc_patologia' => 'La gastritis es un término general para un grupo de enfermedades con un punto en común: la inflamación del revestimiento del estómago.'
            ],
        ];

        TipoPatologia::insert($datos);
    }
}
