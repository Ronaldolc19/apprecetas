@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">{{ isset($categoria) ? 'Editar Categoría' : 'Nueva Categoría' }}</h1>

    <form action="{{ isset($categoria) ? route('categorias.update', $categoria) : route('categorias.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($categoria))
            @method('PUT')
        @endif

        <div>
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $categoria->nombre ?? '') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded px-3 py-2" rows="3">{{ old('descripcion', $categoria->descripcion ?? '') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            {{ isset($categoria) ? 'Actualizar' : 'Guardar' }}
        </button>
        <a href="{{ route('categorias.index') }}" class="ml-2 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
