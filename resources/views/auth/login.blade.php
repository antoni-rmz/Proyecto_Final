@extends('layout.LayoutLogin')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="flex items-center justify-center min-h-[80vh] bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border border-gray-200">
        
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Acceso ElectroPC</h2>

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                <input type="email" name="email" id="email" 
                       value="{{ old('email') }}"
                       class="w-full px-4 py-3 rounded-lg border @error('email') border-red-500 bg-red-50 text-red-900 @else border-gray-300 @enderror focus:ring-2 focus:ring-blue-500 outline-none transition"
                       placeholder="admin@electropc.com">
                
                @error('email')
                    <p class="mt-2 text-sm text-red-600 font-semibold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Contraseña</label>
                <input type="password" name="password" id="password" 
                       class="w-full px-4 py-3 rounded-lg border @error('password') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-blue-500 outline-none transition">
                
                @error('password')
                    <p class="mt-2 text-sm text-red-600 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-700 text-white font-bold py-3 rounded-lg hover:bg-blue-800 transition transform hover:-translate-y-1">
                Iniciar Sesión
            </button>
        </form>
    </div>
</div>
@endsection