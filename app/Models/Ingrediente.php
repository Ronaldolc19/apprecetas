<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $primaryKey = 'id_ingrediente';

    protected $fillable = ['nombre'];
}
