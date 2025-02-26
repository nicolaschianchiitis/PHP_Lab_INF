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
// Se ci sono parametri in ingresso alla pagina ricerca l'utente nell'array...
if (isset($_POST["utente"]) && isset($_POST["password"])) {
    foreach ($utenti as $utente)
        if ($utente["utente"] == $_POST["utente"] && $utente["password"] == $_POST["password"])
            // ... e codifica della riga trovata in JSon
            echo json_encode($utente);
}
else // Eventualmente se mancano parametri
    echo "Mancano parametri!";
?>