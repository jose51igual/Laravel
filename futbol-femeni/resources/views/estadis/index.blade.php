@extends('layouts.app')
@vite( 'resources/css/estadis.css')

@yield('title', 'Guia d\'Estadis')
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
@endsection
