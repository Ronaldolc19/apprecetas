@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">{{ isset($receta) ? 'Editar Receta' : 'Nueva Receta' }}</h1>

    <form action="{{ isset($receta) ? route('recetas.update', $receta) : route('recetas.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($receta))
            @method('PUT')
        @endif

        <div>
            <label class="block font-medium">Título</label>
            <input type="text" name="titulo" value="{{ old('titulo', $receta->titulo ?? '') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded px-3 py-2" rows="4">{{ old('descripcion', $receta->descripcion ?? '') }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Tiempo (min)</label>
                <input type="number" name="tiempo_preparacion" value="{{ old('tiempo_preparacion', $receta->tiempo_preparacion ?? '') }}" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block font-medium">Porciones</label>
                <input type="number" name="porciones" value="{{ old('porciones', $receta->porciones ?? '') }}" class="w-full border rounded px-3 py-2">
            </div>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            {{ isset($receta) ? 'Actualizar' : 'Guardar' }}
        </button>
        <a href="{{ route('recetas.index') }}" class="ml-2 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
