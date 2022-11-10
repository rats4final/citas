<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_persona';
    protected $table = 'personas';
    protected $fillable = [
        'nombre_per',
        'apellido_pa_per',
        'apellido_ma_per',
        'ci_per',
        'cel_per',
        'fecha_nac',
        'num_seguro',
        'donante',
        'id_tipo_sangre'
    ];
}
