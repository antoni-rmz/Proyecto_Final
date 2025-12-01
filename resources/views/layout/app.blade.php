<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroPC - @yield('title', 'Inicio')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

    <nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="{{ url('/productos') }}" class="text-2xl font-extrabold text-blue-700 tracking-tight hover:opacity-80 transition">
                ElectroPC
            </a>
            
            <div class="flex items-center gap-8 text-sm font-semibold">
                <a href="#" class="text-gray-500 hover:text-blue-700 transition">Ofertas</a>
                <a href="#" class="text-gray-500 hover:text-blue-700 transition">Soporte</a>
                
                <a href="#" class="relative text-blue-700 hover:text-blue-900 transition flex items-center gap-1">
                    Carrito
                    <span class="bg-blue-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full -mt-3">0</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 mt-12 py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-500 text-sm">
                &copy; 2025 <span class="font-bold text-gray-700">ElectroPC</span>. Todos los derechos reservados.
            </p>
        </div>
    </footer>

</body>
</html>