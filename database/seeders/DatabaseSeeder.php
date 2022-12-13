<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TipoSangre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TipoSangre::class,
            SedeSeeder::class,
            TipoPatologiaSeeder::class,
            EspecialidadSeeder::class
        ]);  
    }
}
