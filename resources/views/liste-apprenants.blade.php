<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste apprenants</title>
    <style>
        * {
            font-family: 'Trebuchet MS';
        }

        .button {
            padding: 10px;
            border: none;
            border-radius: 10px;
            color: white;
        }

        .add,
        .read {
            background-color: #007bff;
            margin-bottom: 10px
        }

        .delete {
            background-color: #dc3545;
        }

        .update {
            background-color: #ffc107;
        }

        table {
            border-collapse: collapse;
            border-radius: 10px
        }

        th,
        td {
            padding: 10px
        }
    </style>
</head>

<body>
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

</body>

</html>
