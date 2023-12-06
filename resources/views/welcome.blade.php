@extends('base')
@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue</h1>
    <div class="mb-2">
        <a class=" btn btn-primary" href="{{ url('apprenants') }}">Voir la liste des apprenants</a>
        <a class=" btn btn-primary" href="{{ url('formations') }}">Voir la liste des formations</a>

    </div>

@endsection
