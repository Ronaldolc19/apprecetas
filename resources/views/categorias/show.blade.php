@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Detalle de la Categoría</h1>

    <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
    <p class="mt-2"><strong>Descripción:</strong><br>{{ $categoria->descripcion }}</p>

    <div class="mt-4 space-x-2">
        <a href="{{ route('categorias.edit', $categoria) }}" class="bg-yellow-400 px-3 py-1 rounded text-white hover:bg-yellow-500">Editar</a>
        <a href="{{ route('categorias.index') }}" class="bg-gray-300 px-3 py-1 rounded hover:bg-gray-400">Volver</a>
    </div>
</div>
@endsection
