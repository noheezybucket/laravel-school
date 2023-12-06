@extends('base')

@section('title', 'Apprenants')

@section('content')
    <h1>Liste des apprenants</h1>
    <div class="mb-2">
        <button class="btn btn-primary">Ajouter un apprenant</button>
        <a class="btn btn-link" href="{{ url('formations') }}">Voir la liste des formation</a>

    </div>

    <table class="table-bordered" width='100%'>
        <thead align="center">
            <th>ID</th>

            <th>Prenom</th>
            <th>Nom</th>
            <th width="30%" class="py-2">Actions</th>
        </thead>

        @foreach ($apprenants as $apprenant)
            <tr align="center">
                <td>
                    {{ $apprenant->id }}
                </td>
                <td>
                    {{ $apprenant->name }}
                </td>
                <td>
                    {{ $apprenant->surname }}
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
