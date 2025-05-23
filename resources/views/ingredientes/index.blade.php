@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Ingredientes</h1>
        <a href="{{ route('ingredientes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Nuevo Ingrediente</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <ul class="divide-y">
        @foreach ($ingredientes as $ingrediente)
            <li class="py-2 flex justify-between items-center">
                <span>{{ $ingrediente->nombre }}</span>
                <div class="space-x-2">
                    <a href="{{ route('ingredientes.show', $ingrediente) }}" class="text-blue-600 hover:underline">Ver</a>
                    <a href="{{ route('ingredientes.edit', $ingrediente) }}" class="text-yellow-600 hover:underline">Editar</a>
                    <form action="{{ route('ingredientes.destroy', $ingrediente) }}" method="POST" class="inline">
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
