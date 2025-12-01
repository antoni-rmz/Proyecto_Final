@extends('layouts.app')

@section('title', 'Catálogo')

@section('content')

    <header class="bg-slate-900 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">Bienvenido a ElectroPC</h1>
            <p class="text-slate-400 text-lg mb-8 max-w-2xl mx-auto">
                Especialistas en hardware de alto rendimiento.
            </p>
        </div>
    </header>

    <div class="container mx-auto px-6 py-12">
        @foreach($productos as $producto)
             @endforeach
    </div>

@endsection