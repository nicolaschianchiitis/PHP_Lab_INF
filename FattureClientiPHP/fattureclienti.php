<!-- Prova Cookie -->
<?php
    $cookieName = "BiscottinoDigitale";
    $cookieValue = "Prova_Cookie_PHP";
    setcookie($cookieName, $cookieValue, time() + (86400 * 30), "./fattureclienti.php");
?>

<!-- Array associativi -->
<?php
    // Clienti
    $clienti = array(
        0 => array("id" => 0, "nome" => "Nicola", "cognome" => "Schianchi",
                    "dataNascita" => new DateTime("2006-07-28 09:00:00")),
        1 => array("id" => 1, "nome" => "Michele Christian", "cognome" => "Lobos",
                    "dataNascita" => new DateTime("2006-08-29 09:00:00")),
        2 => array("id" => 2, "nome" => "Silvio", "cognome" => "Schianchi",
                    "dataNascita" => new DateTime("1966-03-20 10:30:00")),
        3 => array("id" => 3, "nome" => "Daniela", "cognome" => "Bianchi",
                    "dataNascita" => new DateTime("1969-02-18 19:20:03"))
    );
    // Fatture
    $fatture = array(
        0 => array("idCliente" => 0, "importo" => 1183.45,
                    "data" => new DateTime("2023-12-08 18:36:40")),
        1 => array("idCliente" => 0, "importo" => 1334.28,
                    "data" => new DateTime("2021-11-20 11:27:31")),
        2 => array("idCliente" => 0, "importo" => 25.50,
                    "data" => new DateTime("2025-01-14 09:20:46")),
        3 => array("idCliente" => 1, "importo" => 449.99,
                    "data" => new DateTime("2025-01-02 09:08:07")),
        4 => array("idCliente" => 1, "importo" => 1020.76,
                    "data" => new DateTime("2020-12-02 14:40:03")),
        5 => array("idCliente" => 2, "importo" => 989.99,
                    "data" => new DateTime("2021-10-13 17:20:01")),
        6 => array("idCliente" => 2, "importo" => 65.00,
                    "data" => new DateTime("2025-01-01 12:00:10")),
        7 => array("idCliente" => 3, "importo" => 85.60,
                    "data" => new DateTime("2025-01-12 15:24:09")),
        8 => array("idCliente" => 3, "importo" => 560.89,
                    "data" => new DateTime("2025-01-14 18:42:49"))
    );

    // Ottieni l'ID del cliente dati nome e cognome
    function getIDCliente($nome, $cognome) {
        global $clienti;
        $id = -1;
        foreach ($clienti as $cliente) {
            if ($cliente['nome'] == $nome && $cliente['cognome'] == $cognome) {
                $id = $cliente['id'];
                return $id;
            }
        }
        return $id;
    }

    // Ottieni l'elenco delle fatture di un cliente
    function getFattureCliente($nome, $cognome) {
        global $fatture;
        $id = getIDCliente($nome, $cognome);
        $fatt = array();
        // Ottengo le fatture avendo l'ID Cliente
        foreach ($fatture as $f) {
            if ($f['idCliente'] == $id) {
                $fatt[] = $f;
            }
        }
        return $fatt;
    }

    // Ottieni l'importo totale delle fatture
    function getTotFatture($fat) {
        $tot = 0.0;
        foreach ($fat as $f) {
            $tot += $f['importo'];
        }
        return $tot;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatture Clienti - PHP</title>
</head>
<body>
    <center>
        <h1>Fatture clienti in PHP</h1>
        <?php
            print("<h2>Fatture del cliente " . $clienti[0]['nome'] . " " . $clienti[0]['cognome'] . "</h2>");
        ?>
        <table id="tFatt">
            <tr>
                <th>ID Cliente</th>
                <th>Importo</th>
                <th>Data</th>
            </tr>
            <?php
                // Fatture cliente
                $fc = getFattureCliente($clienti[0]['nome'], $clienti[0]['cognome']);
                foreach ($fc as $f) {
                    print("<tr><td>" . $f['idCliente'] . "</td><td>" . $f['importo'] .
                            "</td><td>" . $f['data']->format("d-m-Y H:i:s") . "</td></tr>");
                }
            ?>
        </table>
        <?php
            // Totale fatture
            $tot = getTotFatture($fc);
            print("<br><h3>Totale fatture: " . $tot . " €</h3>");
        ?>
    </center>
</body>
</html>