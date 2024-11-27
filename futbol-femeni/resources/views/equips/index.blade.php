@extends('layouts.app')

@section('title', 'Guia d\'Equips')
@section('content')
<ul>
@foreach($equips as $equip)
 <x-equip
    :nom="$equip['nom']"
    :estadi="$equip['estadi']"
    :titols="$equip['titols']"
/>
@endforeach
</ul>
@endsection
