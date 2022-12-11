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
        'id_tipo_sangre',
        'id_pariente'
    ];
    protected $dates = [
        'fecha_nac'
    ];

    public function tipo_sangre(){
        return $this->belongsTo(TipoSangre::class,'id_tipo_sangre','id_tipo_sangre');
    }

    public function pariente(){
        return $this->belongsTo(Persona::class,'id_pariente','id_persona');
    }

    public function has_especialidad()
    {
        return $this->hasMany(Usario_has_especialidad::class,'id_medico','id_persona');
    }

}
