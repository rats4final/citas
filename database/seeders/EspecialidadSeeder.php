<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            'nombre_especialidad' => 'Caradiologo',
            'descripcion_especialidad' => 'Los cardiólogos son médicos que se especializan en el diagnóstico y tratamiento de las enfermedades del corazón y los vasos sanguíneos'
        ];
        Especialidad::insert($datos);
    }
}
