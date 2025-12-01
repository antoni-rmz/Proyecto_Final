<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroPC - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <nav class="bg-white shadow border-b border-gray-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/productos') }}" class="text-2xl font-bold text-blue-700">ElectroPC</a>
            
            <div class="flex items-center gap-6 text-sm font-semibold">
                <a href="#" class="text-gray-500 hover:text-blue-700 transition hidden md:block">Ofertas</a>
                
                @auth
                    <span class="text-gray-800">{{ Auth::user()->name }}</span>
                    
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-100 text-red-600 px-4 py-2 rounded-lg hover:bg-red-200 transition">
                            Salir
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-700">Login</a>
                @endguest

                <a href="#" class="relative text-blue-700 hover:text-blue-900 transition flex items-center gap-1 bg-blue-50 px-4 py-2 rounded-full">
                    Carrito
                    <span class="bg-blue-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full ml-1">0</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white border-t mt-12 py-8 text-center text-gray-500 text-sm">
        &copy; 2025 ElectroPC
    </footer>

</body>
</html>