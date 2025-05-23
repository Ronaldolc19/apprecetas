@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-3xl font-bold mb-4">{{ $receta->titulo }}</h1>

    <p class="mb-2"><strong class="text-gray-700">Descripción:</strong><br>{{ $receta->descripcion }}</p>

    <div class="mb-2 text-sm text-gray-600">
        <p><strong>Tiempo de preparación:</strong> {{ $receta->tiempo_preparacion }} minutos</p>
        <p><strong>Porciones:</strong> {{ $receta->porciones }}</p>
    </div>

    <div class="mt-4 space-x-2">
        <a href="{{ route('recetas.edit', $receta) }}" class="bg-yellow-400 px-3 py-1 rounded text-white hover:bg-yellow-500">Editar</a>
        <a href="{{ route('recetas.index') }}" class="bg-gray-300 px-3 py-1 rounded hover:bg-gray-400">Volver</a>
    </div>
</div>
@endsection
