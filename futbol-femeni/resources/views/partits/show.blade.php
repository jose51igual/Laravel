@extends('layouts.app')
@section('title', " Guia de partits" )
@section('content')
<x-partit
   :local="$partit['local']"
   :visitant="$partit['visitant']"
   :data="$partit['data']"
   :resultat="$partit['resultat']"
/>
@endsection
