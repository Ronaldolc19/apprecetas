<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Ingrediente;
use App\Models\RecetaIngrediente;
use Illuminate\Http\Request;

class RecetaIngredienteController extends Controller
{
    public function index()
    {
        $registros = RecetaIngrediente::with('receta', 'ingrediente')->get();
        return view('receta_ingredientes.index', compact('registros'));
    }

    public function create()
    {
        $recetas = Receta::all();
        $ingredientes = Ingrediente::all();
        return view('receta_ingredientes.create', compact('recetas', 'ingredientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_receta' => 'required|exists:recetas,id_receta',
            'id_ingrediente' => 'required|exists:ingredientes,id_ingrediente',
            'cantidad' => 'required|numeric|min:0.01',
            'unidad' => 'required|string|max:50',
        ]);

        RecetaIngrediente::create($request->all());
        return redirect()->route('receta_ingredientes.index')->with('success', 'Ingrediente añadido a la receta.');
    }

    public function edit(RecetaIngrediente $receta_ingrediente)
    {
        $recetas = Receta::all();
        $ingredientes = Ingrediente::all();
        return view('receta_ingredientes.edit', compact('receta_ingrediente', 'recetas', 'ingredientes'));
    }

    public function update(Request $request, RecetaIngrediente $receta_ingrediente)
    {
        $request->validate([
            'id_receta' => 'required|exists:recetas,id_receta',
            'id_ingrediente' => 'required|exists:ingredientes,id_ingrediente',
            'cantidad' => 'required|numeric|min:0.01',
            'unidad' => 'required|string|max:50',
        ]);

        $receta_ingrediente->update($request->all());
        return redirect()->route('receta_ingredientes.index')->with('success', 'Registro actualizado.');
    }

    public function destroy(RecetaIngrediente $receta_ingrediente)
    {
        $receta_ingrediente->delete();
        return redirect()->route('receta_ingredientes.index')->with('success', 'Registro eliminado.');
    }   
}