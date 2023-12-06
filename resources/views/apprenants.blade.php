@extends('base');

@section('title', 'Apprenants');

@section('content')
    <h1>Liste des apprenants</h1>
    <button class="add button">Ajouter apprenant</button>

    <table width="70%" border="none">
        <thead align="left">
            <th>Prenom</th>
            <th>Nom</th>
            <th width="30%"></th>
        </thead>
        <tr>

            @foreach ($apprenants as $apprenant)
                <td>
                    {{ $apprenant->name }}
                </td>
                <td>
                    {{ $apprenant->surname }}
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
