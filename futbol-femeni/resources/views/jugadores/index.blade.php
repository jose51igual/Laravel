@extends('layouts.app')
@section('title', " Guia de jugadores" )
@vite( 'resources/css/jugadores.css')

@section('content')
    <h1 class="text-3xl font-bold text-blue-800 mb-6">Guia de jugadores</h1>
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Nom</th>
            <th class="border border-gray-300 p-2">Equip</th>
            <th class="border border-gray-300 p-2">Posició</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jugadores as $key => $jugadora )
            <tr class="hover:bg-gray-100">
                <td class="border border-gray-300 p-2">
                    <h2>
                    <a href="{{ route('jugadores.show', $key) }}" class="text-blue-700 hover:underline">{{ $jugadora['nom'] }}</a>
                </td>                
                <td class="border border-gray-300 p-2">{{ $jugadora['equip']  }}</td>
                <td class="border border-gray-300 p-2">{{ $jugadora['posicio']  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
