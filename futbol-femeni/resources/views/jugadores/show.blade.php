@extends('layouts.app')
@section('title', " Guia de jugadoras" )
@section('content')
@if($jugadora)
<x-jugadora
   :nom="$jugadora['nom']"
   :equip="$jugadora['equip']"
   :posicio="$jugadora['posicio']"
/>
@endif
@endsection
