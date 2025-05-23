<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Administración - Sistema de Recetas') }}
        </h2>
    </x-slot>

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
                            <a href="" class="text-green-600 hover:text-green-800 text-sm font-medium">Ver todos →</a>
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
                            <a href="" class="text-purple-600 hover:text-purple-800 text-sm font-medium">Ver todas →</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Valoraciones -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition transform hover:scale-105">
                    <div class="p-6 flex items-center">
                        <div class="bg-yellow-100 p-4 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Valoraciones</h3>
                            <p class="text-2xl font-bold">{{ App\Models\Valoracion::count() }}</p>
                            <a href="#" class="text-yellow-600 hover:text-yellow-800 text-sm font-medium">Ver todas →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Acciones Rápidas -->
            <div class="mb-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Acciones Rápidas</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="" class="bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-4 flex items-center transition">
                        <div class="bg-blue-100 p-3 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <span class="font-medium text-gray-700">Nueva Receta</span>
                    </a>

                    <a href="" class="bg-green-50 hover:bg-green-100 border border-green-200 rounded-lg p-4 flex items-center transition">
                        <div class="bg-green-100 p-3 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <span class="font-medium text-gray-700">Nuevo Ingrediente</span>
                    </a>

                    <a href="" class="bg-purple-50 hover:bg-purple-100 border border-purple-200 rounded-lg p-4 flex items-center transition">
                        <div class="bg-purple-100 p-3 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <span class="font-medium text-gray-700">Nueva Categoría</span>
                    </a>
                </div>
            </div>

            <!-- Últimas Recetas -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Últimas Recetas</h3>
                    <a href="{{ route('recetas.index') }}" class="text-sm text-blue-600 hover:text-blue-800">Ver todas</a>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tiempo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Porciones</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categorías</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach(App\Models\Receta::latest()->take(5)->get() as $receta)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            @if($receta->imagenes->first())
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $receta->imagenes->first()->url_imagen }}" alt="">
                                            </div>
                                            @endif
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $receta->titulo }}</div>
                                                <div class="text-sm text-gray-500">{{ Str::limit($receta->descripcion, 50) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $receta->tiempo_preparacion }} min</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $receta->porciones }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex flex-wrap gap-1">
                                            @foreach($receta->categorias->take(2) as $categoria)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                                {{ $categoria->nombre }}
                                            </span>
                                            @endforeach
                                            @if($receta->categorias->count() > 2)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                +{{ $receta->categorias->count() - 2 }}
                                            </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('recetas.edit', $receta->id_receta) }}" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                                        <a href="{{ route('recetas.show', $receta->id_receta) }}" class="text-green-600 hover:text-green-900">Ver</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Últimos Ingredientes -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Últimos Ingredientes</h3>
                    <a href="" class="text-sm text-green-600 hover:text-green-800">Ver todos</a>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Recetas</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach(App\Models\Ingrediente::latest()->take(5)->get() as $ingrediente)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $ingrediente->nombre }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $ingrediente->recetas->count() }} recetas</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('ingredientes.edit', $ingrediente->id_ingrediente) }}" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                                        <form action="{{ route('ingredientes.destroy', $ingrediente->id_ingrediente) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>