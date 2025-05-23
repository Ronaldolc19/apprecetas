@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Recetas</h1>
        <a href="{{ route('recetas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Nueva Receta</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <ul class="divide-y">
        @foreach ($recetas as $receta)
            <li class="py-2 flex justify-between items-center">
                <div>
                    <a href="{{ route('recetas.show', $receta) }}" class="text-lg font-semibold text-blue-600 hover:underline">{{ $receta->titulo }}</a>
                    <p class="text-sm text-gray-500">{{ $receta->porciones }} porciones - {{ $receta->tiempo_preparacion }} min</p>
                </div>
                <a href="{{ route('recetas.show', $receta) }}" class="text-blue-600 hover:underline">Ver</a>
                <div class="space-x-2">
                    <a href="{{ route('recetas.edit', $receta) }}" class="text-yellow-500 hover:underline">Editar</a>
                    <form action="{{ route('recetas.destroy', $receta) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
