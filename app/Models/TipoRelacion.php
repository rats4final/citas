<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRelacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tipo_relacion';
    protected $table = 'tipo_relacion';
    protected $fillable = [
            'relacion',
            'id_persona',
            'id_pariente'
    ];

    public function persona(){
       return $this->hasOne(Persona::class,'id_persona','id_persona');
    }
    public function pariente(){
        return $this->hasOne(Persona::class,'id_persona','id_pariente');
    }
}
