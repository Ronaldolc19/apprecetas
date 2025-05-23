<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class RecetaIngrediente extends Model
{
    protected $table = 'receta_ingredientes';

    protected $fillable = [
        'id_receta', 'id_ingrediente', 'cantidad', 'unidad'
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class, 'id_receta');
    }

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class, 'id_ingrediente');
    }
}
