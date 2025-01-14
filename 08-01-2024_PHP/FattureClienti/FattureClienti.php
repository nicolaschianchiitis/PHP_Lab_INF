<!-- Michele Christian Lobos 5^C Inf 08/01/2025
 Consegna:
    Realizzare un'applicazione php così strutturata:
    array associativo CLIENTI (dati hardcoded)
        int id
        string nome
        string cognome
        DateTime dataNascita

    array associativo FATTURE (dati hardcoded)
        int idCliente
        double importo
        DateTime dataFattura

    Scrivere funzione che dato un cliente (nome cognome)
    visualizzi in una tabella le relative fatture e l'importo totale
 -->

<!--Prova cookie PHP-->
<?php
    $cookieName = "Biscottino";
    $cookieValue = "OliverGord";
    setcookie($cookieName, $cookieValue, time() + (86400 * 30), "./FattureClienti.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatture</title>
</head>
<body>
    <?php
        //Dati
        $clienti = array ();
        $fatture = array ();

        //Intestazione pagina
        print("<h1>Fatture Clienti Lobos 08/01/2025</h1><br>
        <p><strong>Today is ".Date("l F d, Y")."</strong> 
        sul server ".$_SERVER["SERVER_NAME"]." 
        e cookie ".!isset($_COOKIE[$cookieName])."</p>");
    
        //Logica
        

        //Corpo pagina

    ?>
</body>
</html>