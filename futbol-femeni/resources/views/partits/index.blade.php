@extends('layouts.app')
@section('title', " Guia de partits" )
@vite( 'resources/css/partits.css')

@section('content')
    <h1 class="text-3xl font-bold text-blue-800 mb-6">Guia de jugadores</h1>
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Local</th>
            <th class="border border-gray-300 p-2">Visitant</th>
            <th class="border border-gray-300 p-2">Data</th>
            <th class="border border-gray-300 p-2">Resultat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($partits as $key => $partit )
            <tr class="hover:bg-gray-100">
                <td class="border border-gray-300 p-2">
                    <h2>
                    <a href="{{ route('partits.show', $key) }}" class="text-blue-700 hover:underline">{{ $partit['local'] }}</a>
                </td>                
                <td class="border border-gray-300 p-2">{{ $partit['visitant'] }}</td>
                <td class="border border-gray-300 p-2">{{ $partit['data']  }}</td>
                <td class="border border-gray-300 p-2">{{ $partit['resultat']  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
