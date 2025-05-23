<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $primaryKey = 'id_receta';
    protected $fillable = [
        'titulo', 'descripcion', 'tiempo_preparacion', 'porciones'
    ];
}
