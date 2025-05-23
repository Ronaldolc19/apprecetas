@extends('layouts.app')

@section('content')
        <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Estadísticas Rápidas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Tarjeta Recetas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition transform hover:scale-105">
                    <div class="p-6 flex items-center">
                        <div class="bg-blue-100 p-4 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Recetas</h3>
                            <p class="text-2xl font-bold">{{ App\Models\Receta::count() }}</p>
                            <a href="{{ route('recetas.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver todas →</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Ingredientes -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition transform hover:scale-105">
                    <div class="p-6 flex items-center">
                        <div class="bg-green-100 p-4 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Ingredientes</h3>
                            <p class="text-2xl font-bold">{{ App\Models\Ingrediente::count() }}</p>
                            <a href="{{ route('ingredientes.index') }}" class="text-green-600 hover:text-green-800 text-sm font-medium">Ver todos →</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Categorías -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition transform hover:scale-105">
                    <div class="p-6 flex items-center">
                        <div class="bg-purple-100 p-4 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Categorías</h3>
                            <p class="text-2xl font-bold">{{ App\Models\Categoria::count() }}</p>
                            <a href="{{ route('categorias.index') }}" class="text-purple-600 hover:text-purple-800 text-sm font-medium">Ver todas →</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Valoraciones -->
                <div class="bg-orange-50 overflow-hidden shadow-sm sm:rounded-lg transition transform hover:scale-105">
                <div class="p-6 flex items-center">
                    <div class="bg-orange-100 p-4 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Ingredientes Recetas</h3>
                        <p class="text-2xl font-bold">{{ App\Models\RecetaIngrediente::count() }}</p>
                        <a href="{{ route('receta_ingredientes.index') }}" class="text-orange-600 hover:text-orange-800 text-sm font-medium">
                            Administrar relaciones →
                        </a>
                    </div>
                </div>
          
        </div>
    </div>

@endsection