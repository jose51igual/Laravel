@extends('layouts.app')
@vite( 'resources/css/estadis.css')

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'Estadis</h1>
<ul class="w-full border-collapse border border-gray-300">
    @foreach($estadis as $estadi)
        <li class="border border-gray-300 p-2 hover:bg-gray-100">
            <x-estadi
                :nom="$estadi['nom']"
                :ciutat="$estadi['ciutat']"
                :capacitat="$estadi['capacitat']"
            />
        </li>
    @endforeach
</ul>
<a href="{{ route('estadis.create') }}" class="text-blue-700 hover:underline">Crear Estadi</a>
@endsection
