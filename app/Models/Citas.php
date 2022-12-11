<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table = 'citas';
    protected $primaryKey = 'id_cita';
    protected $fillable = ['fecha_cita','estado','detalles_cita','id_medico','id_paciente'];

    public function medico()
    {
        return $this->hasOne(User::class,'id','id_medico');
    }
    public function paciente()
    {
        return $this->hasOne(User::class,'id' ,'id_paciente');
    }
}
