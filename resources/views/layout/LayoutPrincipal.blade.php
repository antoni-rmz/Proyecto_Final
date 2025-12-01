<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroPC - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow border-b border-gray-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-700">ElectroPC</a>
            <div class="space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">Ofertas</a>
                <a href="#" class="text-blue-700 font-bold">Carrito (0)</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white border-t mt-12 py-8 text-center text-gray-500 text-sm">
        &copy; 2025 ElectroPC
    </footer>

</body>
</html>