<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styles CSS pour le PDF */
        /* Styles CSS pour le PDF */
body {
    font-family: Arial, sans-serif;
    font-size: 12px;
    color: #06A3DA;
}

h1 {
    font-size: 26px;
    font-weight: bold;
    margin-bottom: 20px;
   text-align: center;
   color: #06A3DA;
   text-transform: uppercase;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
table th{
    color: #06A3DA;
}
table th{
    color: #000000;
}
table th,
table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #dddddd;
    text-align: center;
}

table th {
    background-color: #f2f2f2;
}

/* Autres styles CSS personnalisés */

    </style>
</head>
<body>
    <h1>LISTE DES médecins</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Spécialité</th>
                <th>Numéro de chambre</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->specialty }}</td>
                    <td>{{ $doctor->room }}</td>
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
