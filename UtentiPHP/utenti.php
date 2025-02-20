<?php
// Array associativo PHP che simula una eventuale risposta di una query MySql
$utenti = [
    [
        "utente" => "pippo",
        "password" => "pippo",
        "nome" => "mario",
        "cognome" => "rossi",
        "email" => "pippo@pippo.it",
        "dataRegistrazione" => "12-02-2020"
    ],
    [
        "utente" => "pluto",
        "password" => "pluto",
        "nome" => "mario",
        "cognome" => "verdi",
        "email" => "pluto@pluto.com",
        "dataRegistrazione" => "22-01-2020"
    ],
    [
        "utente" => "paperino",
        "password" => "paperino",
        "nome" => "mario",
        "cognome" => "bianchi",
        "email" => "paperino@paperino.org",
        "dataRegistrazione" => "14-03-2020"
    ]
];

// Converti l'array in formato JSON
$jsonData = json_encode($utenti);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esempio PHP JSON senza AJAX</title>
</head>
<body>
    <h2>Dati ricevuti da PHP:</h2>
    <div id="output"></div>

    <script>
        // Passa i dati JSON da PHP a JavaScript
        const jsonData = <?php echo $jsonData; ?>;

        // Manipola i dati ricevuti
        // document.getElementById('output').innerHTML = jsonData[0].cognome + " " + jsonData[0].nome;
        const table = document.createElement('table');
        table.innerHTML = `
            <tr>
                <th>Utente</th>
                <th>Password</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Email</th>
                <th>Data di registrazione</th>
            </tr>
        `;
        jsonData.forEach(element => {
            table.innerHTML += `
                <tr>
                    <td>${element.utente}</td>
                    <td>${element.password}</td>
                    <td>${element.nome}</td>
                    <td>${element.cognome}</td>
                    <td>${element.email}</td>
                    <td>${element.dataRegistrazione}</td>
                </tr>
            `;
        });
    </script>
</body>
</html>