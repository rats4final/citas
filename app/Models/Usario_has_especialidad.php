<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usario_has_especialidad extends Model
{
    use HasFactory;
    protected $table = 'medicos_has_especialidades';

    protected $fillable = [
        'id_medico',
        'id_especialidad',
    ];
    public function especialidad()
    {
        return $this->hasOne(Especialidad::class,'id_especialidad','id_especialidad');
    }
}
