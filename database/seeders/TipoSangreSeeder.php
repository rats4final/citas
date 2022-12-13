<?php

namespace Database\Seeders;

use App\Models\TipoSangre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSangreSeeder extends Seeder
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
                'nombre_tipo_sangre' => 'O+',
                'descripcion_tipo_sangre' => 'Tipo de sangre O positivo',
                'rareza_tipo_sangre' => 'Comun'
            ],
            [
                'nombre_tipo_sangre' => 'A+',
                'descripcion_tipo_sangre' => 'Tipo de sangre A positivo',
                'rareza_tipo_sangre' => 'Comun'
            ],
            [
                'nombre_tipo_sangre' => 'O-',
                'descripcion_tipo_sangre' => 'Tipo de Sangre O negativo',
                'rareza_tipo_sangre' => 'Rara'
            ],
            [
                'nombre_tipo_sangre' => 'AB-',
                'descripcion_tipo_sangre' => 'Tipo de sangre AB negativo',
                'rareza_tipo_sangre' => 'Escaza'
            ],
    
        ];
        TipoSangre::insert($datos);


    }
}
