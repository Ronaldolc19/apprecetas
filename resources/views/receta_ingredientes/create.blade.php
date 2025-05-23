@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">{{ isset($receta_ingrediente) ? 'Editar Registro' : 'Agregar Ingrediente a Receta' }}</h1>

    <form action="{{ isset($receta_ingrediente) ? route('receta_ingredientes.update', $receta_ingrediente) : route('receta_ingredientes.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($receta_ingrediente))
            @method('PUT')
        @endif

        <div>
            <label class="block">Receta</label>
            <select name="id_receta" class="w-full border rounded px-3 py-2" required>
                @foreach ($recetas as $receta)
                    <option value="{{ $receta->id_receta }}" {{ old('id_receta', $receta_ingrediente->id_receta ?? '') == $receta->id_receta ? 'selected' : '' }}>{{ $receta->titulo }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block">Ingrediente</label>
            <select name="id_ingrediente" class="w-full border rounded px-3 py-2" required>
                @foreach ($ingredientes as $ingrediente)
                    <option value="{{ $ingrediente->id_ingrediente }}" {{ old('id_ingrediente', $receta_ingrediente->id_ingrediente ?? '') == $ingrediente->id_ingrediente ? 'selected' : '' }}>{{ $ingrediente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block">Cantidad</label>
            <input type="number" step="0.01" name="cantidad" value="{{ old('cantidad', $receta_ingrediente->cantidad ?? '') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block">Unidad</label>
            <input type="text" name="unidad" value="{{ old('unidad', $receta_ingrediente->unidad ?? '') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            {{ isset($receta_ingrediente) ? 'Actualizar' : 'Agregar' }}
        </button>
        <a href="{{ route('receta_ingredientes.index') }}" class="ml-2 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
