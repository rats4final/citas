<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table = 'citas';
    protected $primaryKey = 'id_cita';
    protected $fillable = ['fecha_cita','detalles_cita','id_secretaria ','id_paciente '];

    public function users()
    {
        return $this->belongsTo(User::class,'id');
    }
}
