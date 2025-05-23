<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingredientes.index', compact('ingredientes'));
    }

    public function create()
    {
        return view('ingredientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Ingrediente::create($request->all());
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente creado correctamente.');
    }

    public function show(Ingrediente $ingrediente)
    {
        return view('ingredientes.show', compact('ingrediente'));
    }

    public function edit(Ingrediente $ingrediente)
    {
        return view('ingredientes.edit', compact('ingrediente'));
    }

    public function update(Request $request, Ingrediente $ingrediente)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $ingrediente->update($request->all());
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente actualizado correctamente.');
    }

    public function destroy(Ingrediente $ingrediente)
    {
        $ingrediente->delete();
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente eliminado correctamente.');
    }
}
