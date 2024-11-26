@extends('layouts.app')

@section('title', 'Guia d\'Equips')
@section('content')
    <h1>Guia d'Equips</h1>
    @foreach($equips as $equip)
        <x-equip
            :nom="$equip['nom']"
            :estadi="$equip['estadi']"
            :titols="$equip['titols']"
        />
    @endforeach
@endsection
