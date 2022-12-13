<?php

namespace Database\Seeders;

use App\Models\Sede;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
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
                'nombre_sede' => 'La Paz',
                'direccion_sede' => 'Entre Pedro Villamil y Nuñez del Prado',
                'telefono_sede' => '2231663',
                'ciudad_sede' => 'La Paz',

            ]
        ];
        Sede::insert($datos);
    }
}
