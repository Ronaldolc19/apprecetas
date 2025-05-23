@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">{{ isset($ingrediente) ? 'Editar Ingrediente' : 'Nuevo Ingrediente' }}</h1>

    <form action="{{ isset($ingrediente) ? route('ingredientes.update', $ingrediente) : route('ingredientes.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($ingrediente))
            @method('PUT')
        @endif

        <div>
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $ingrediente->nombre ?? '') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            {{ isset($ingrediente) ? 'Actualizar' : 'Guardar' }}
        </button>
        <a href="{{ route('ingredientes.index') }}" class="ml-2 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
