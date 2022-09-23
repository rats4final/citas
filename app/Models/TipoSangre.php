<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSangre extends Model
{
    use HasFactory;

    protected $table = 'tipo_sangre';
    protected $primaryKey = 'id_tipo_sangre';
    protected $fillable = ['nombre_tipo_sangre','descripcion_tipo_sangre','rareza_tipo_sangre'];
}
