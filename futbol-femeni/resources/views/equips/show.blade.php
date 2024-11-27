@extends('layouts.app')
@section('title', " Guia d'Equips" )
@section('content')
<x-equip
   :nom="$equip['nom']"
   :estadi="$equip['estadi']"
   :titols="$equip['titols']"
/>
@endsection 
