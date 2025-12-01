@extends('layout.LayoutPrincipal')
@section('title', 'Catálogo')

@section('content')

    <header class="bg-gray-900 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">
                Bienvenido a ElectroPC
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Encuentra el hardware de alto rendimiento que tu setup necesita al mejor precio.
            </p>
        </div>
    </header>

    <div class="container mx-auto px-6 py-12">
        
        @if($productos->isEmpty())
            <div class="text-center py-20">
                <h2 class="text-2xl font-bold text-gray-500">No hay productos disponibles.</h2>
                <p class="text-gray-400">Vuelve a intentarlo más tarde.</p>
            </div>
        @else
            @foreach($productos as $producto)
                <div class="mb-16">
                    <div class="flex items-center gap-4 mb-8 border-b border-gray-200 pb-4">
                        <h2 class="text-3xl font-bold text-gray-800">{{ $producto->Nombre }}</h2>
                        <span class="text-sm text-gray-500 font-medium bg-gray-100 px-2 py-1 rounded-full">
                            {{ $producto->modelos->count() }} modelos
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($producto->modelos as $modelo)
                            <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="text-xs font-bold bg-blue-50 text-blue-600 px-2 py-1 rounded uppercase tracking-wide">
                                        {{ $modelo->Marca }}
                                    </span>
                                    <span class="text-gray-900 font-bold text-lg">
                                        ${{ number_format($modelo->Precio, 2) }}
                                    </span>
                                </div>
                                
                                <h3 class="text-lg font-bold text-gray-800 mb-4 group-hover:text-blue-600 transition-colors">
                                    {{ $modelo->Modelo }}
                                </h3>
                                
                                <button class="w-full bg-gray-900 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition-colors duration-200">
                                    Añadir al Carrito
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif

    </div>

@endsection