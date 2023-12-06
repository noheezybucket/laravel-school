@extends('base');
@section('title', 'Formations');

@section('content')
    <h1>Liste des formations</h1>
    <button class="add button">Ajouter formation</button>

    <table width="70%" border="none">
        <thead align="left">
            <th>Prenom</th>
            <th>Nom</th>
            <th width="30%"></th>
        </thead>
        <tr>

            @foreach ($formations as $formation)
                <td>
                    {{ $formation->name }}
                </td>
                <td>
                    {{ $formation->surname }}
                </td>
                <td>
                    <button class="add button">Voir</button>
                    <button class="update button">Modifier</button>
                    <button class="delete button">Supprimer</button>

                </td>
        </tr>
        @endforeach

    </table>
@endsection
