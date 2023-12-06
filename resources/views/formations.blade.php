@extends('base')
@section('title', 'Formations')

@section('content')
    <h1>Liste des formations</h1>
    <div class="mb-2">
        <button class=" btn btn-primary">Ajouter une formation</button>
        <a class=" btn btn-link" href="{{ url('apprenants') }}">Voir la liste des apprenants</a>

    </div>

    <table class="table-bordered">
        <thead align="center">
            <th class="p-2">ID</th>

            <th>Nom de la formation</th>
            <th width="30%">Actions</th>
        </thead>

        @foreach ($formations as $formation)
            <tr align="center">
                <td>
                    {{ $formation->id }}
                </td>
                <td>
                    {{ $formation->name }}
                </td>
                <td class="px-2 py-2">
                    <button class="btn btn-light">Voir</button>
                    <button class="btn btn-warning">Modifier</button>
                    <button class="btn btn-danger">Supprimer</button>

                </td>
            </tr>
        @endforeach

    </table>
@endsection
