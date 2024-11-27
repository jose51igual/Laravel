@extends('layouts.app')
@vite( 'resources/css/estadis.css')

@section('content')
<ul>
@foreach($estadis as $estadi)
 <x-estadi
    :nom="$estadi['nom']"
    :ciutat="$estadi['ciutat']"
    :capacitat="$estadi['capacitat']"
/>
@endforeach
</ul>
<a href="{{ route('estadis.create') }}">Crear Estadi</a>
@endsection
