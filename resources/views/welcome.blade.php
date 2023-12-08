@extends('base')
@section('title', 'Accueil')

@section('content')
    <main>
        <h1>Nous vous souhaitons la bienvenue</h1>
        <p>Que voulez-vous faire ?</p>

        <div class="mb-2">
            <a class=" btn btn-primary" href="{{ url('apprenants') }}">Voir la liste des apprenants</a>
            <a class=" btn btn-primary" href="{{ url('formations') }}">Voir la liste des formations</a>

        </div>
    </main>

@endsection
