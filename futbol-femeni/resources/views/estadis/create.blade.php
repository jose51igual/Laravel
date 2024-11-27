@extends('layouts.app')
@vite('resources/css/estadis.css')

@section('title', 'Crear Estadis')
@section('content')
<form action="" method="GET" class="form-estadi">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>
    <label for="ciutat">Ciutat:</label>
    <input type="text" name="ciutat" id="ciutat" required>
    <label for="capacitat">Capacitat:</label>
    <input type="number" name="capacitat" id="capacitat" required>
    <button type="submit">Crear</button>
</form>
@endsection
