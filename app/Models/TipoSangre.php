<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSangre extends Model
{
    use HasFactory;

    protected $table = 'tipos_sangre';
    protected $primaryKey = 'id_tipo_sangre';
    protected $fillable = ['nombre_tipo_sangre','descripcion_tipo_sangre','rareza_tipo_sangre'];

    public function personas(){
        return $this->hasMany(Persona::class,'id_tipo_sangre','id_tipo_sangre');
    }
}
