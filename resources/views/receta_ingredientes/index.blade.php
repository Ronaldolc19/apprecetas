@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Ingredientes por Receta</h1>
    <a href="{{ route('receta_ingredientes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Agregar</a>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Receta</th>
                <th class="px-4 py-2">Ingrediente</th>
                <th class="px-4 py-2">Cantidad</th>
                <th class="px-4 py-2">Unidad</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td class="border px-4 py-2">{{ $registro->receta->titulo }}</td>
                    <td class="border px-4 py-2">{{ $registro->ingrediente->nombre }}</td>
                    <td class="border px-4 py-2">{{ $registro->cantidad }}</td>
                    <td class="border px-4 py-2">{{ $registro->unidad }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('receta_ingredientes.edit', $registro) }}" class="text-yellow-600 hover:underline">Editar</a>
                        <form action="{{ route('receta_ingredientes.destroy', $registro) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
