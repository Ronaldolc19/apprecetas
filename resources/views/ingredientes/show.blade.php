@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Detalle del Ingrediente</h1>

    <p class="mb-2"><strong>Nombre:</strong> {{ $ingrediente->nombre }}</p>

    <div class="mt-4 space-x-2">
        <a href="{{ route('ingredientes.edit', $ingrediente) }}" class="bg-yellow-400 px-3 py-1 rounded text-white hover:bg-yellow-500">Editar</a>
        <a href="{{ route('ingredientes.index') }}" class="bg-gray-300 px-3 py-1 rounded hover:bg-gray-400">Volver</a>
    </div>
</div>
@endsection
