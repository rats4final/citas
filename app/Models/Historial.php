<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    protected $table = 'historial';
    protected $primaryKey = 'id_historial';
    protected $fillable = ['id_persona','id_sede','id_medico','fecha_historial','detalles_historial'];
    public function personas()
    {
        return $this->belongsTo(Persona::class,'id_persona');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'id_medico');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class,'id_sede');
    }


}
