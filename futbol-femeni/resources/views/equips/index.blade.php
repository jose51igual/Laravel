@extends('layouts.app')
@section('title', " Guia d'Equips" )
@section('content')
    <h1>Guia d'Equips</h1>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Estadi</th>
            <th>Títols</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equips as $equip )
            <tr>
                <td class="equip">
                    <h2>
                        <a href="{{ route('equips.show', ['id' => $equip['id']]) }}">
                            {{ $equip['nom'] }}
                        </a>
                    </h2>
                </td>                
                <td class="equip">{{ $equip['estadi']  }}</td>
                <td class="equip">{{ $equip['titols']  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
