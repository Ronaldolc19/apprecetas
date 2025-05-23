<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();
        return view('recetas.index', compact('recetas'));
    }

    public function create()
    {
        return view('recetas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'nullable',
            'tiempo_preparacion' => 'nullable|integer',
            'porciones' => 'nullable|integer',
        ]);

        Receta::create($request->all());
        return redirect()->route('recetas.index')->with('success', 'Receta creada correctamente.');
    }

    public function show(Receta $receta)
    {
        return view('recetas.show', compact('receta'));
    }

    public function edit(Receta $receta)
    {
        return view('recetas.edit', compact('receta'));
    }

    public function update(Request $request, Receta $receta)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'nullable',
            'tiempo_preparacion' => 'nullable|integer',
            'porciones' => 'nullable|integer',
        ]);

        $receta->update($request->all());
        return redirect()->route('recetas.index')->with('success', 'Receta actualizada correctamente.');
    }

    public function destroy(Receta $receta)
    {
        $receta->delete();
        return redirect()->route('recetas.index')->with('success', 'Receta eliminada correctamente.');
    }
}
