@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Categorías</h1>
        <a href="{{ route('categorias.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Nueva Categoría</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <ul class="divide-y">
        @foreach ($categorias as $categoria)
            <li class="py-2 flex justify-between items-center">
                <div>
                    <strong>{{ $categoria->nombre }}</strong>
                    <p class="text-sm text-gray-500">{{ $categoria->descripcion }}</p>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('categorias.show', $categoria) }}" class="text-blue-600 hover:underline">Ver</a>
                    <a href="{{ route('categorias.edit', $categoria) }}" class="text-yellow-600 hover:underline">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
