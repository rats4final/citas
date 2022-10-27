<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPatologia extends Model
{
    use HasFactory;

    protected $table = 'tipo_patologia';
    protected $primaryKey = 'id_tip_patologia';
    protected $fillable = ['nombre_patologia','desc_patologia'];
}
