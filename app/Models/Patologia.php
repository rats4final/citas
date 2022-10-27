<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    use HasFactory;
    protected $table = 'patologias';
    protected $primaryKey = 'id_patologia';
    protected $fillable = ['nombre_patologia','detalle_patologia','id_tip_patologia'];

    public function tipo_patologia()//un servicio tiene solo 1 categoria
    {
        return $this->belongsTo(TipoPatologia::class,'id_tip_patologia');
    }
}
