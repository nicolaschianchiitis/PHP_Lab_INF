<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Visualizzazione dati dal database con MySQLi</title>
    <?php
        //funzione che legge i piloti dal db in base alla moto selezionata 
        function leggiPiloti($moto){
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "motociclismo";

            // Connessione con incluso DB
            $connect = new mysqli($host, $user, $password, $db);
            if ($connect->connect_errno) {
                exit("Errore connessione: " . $connect->connect_error);
            } 
            //query richiesta al db
            $sql = "SELECT * FROM moto INNER JOIN pilota ON codmoto = moto where marca = '{$moto}'";

            $result = $connect->query($sql);
            $connect->close();
            return $result; // ritorna la risposta del db
        }

        //funzione che legge le moto dal db
        function leggiMoto(){
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "motociclismo";

            // Connessione con incluso DB
            $connect = new mysqli($host, $user, $password, $db);
            if ($connect->connect_errno) {
                exit("Errore connessione: " . $connect->connect_error);
            } 
            //query
            $sql = "SELECT marca FROM moto";

            $result = $connect->query($sql);
            $connect->close();
            return $result; // ritorna la risposta del db
        }


    ?>
</head>

<body>
<?php
    
    if (isset($_GET ["moto"])){
        //cercare la moto 
        $piloti = leggiPiloti($_GET ["moto"]);
        //controlla se ci sono piloti e li mostra mano a mano 
        if ($piloti->num_rows > 0) {
            echo "<table><tr><th>cod Pilota</th><th>Nome</th><th>Marca</th></tr>";
            while($row = $piloti->fetch_assoc()) { // approccio ai risultati come array associativo
                echo "<tr><td>". $row["codPilota"]. "</td><td>". $row["nome"]. "</td><td>" . $row["marca"]. "</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "nessuna moto ".$_GET["moto"]." trovata!"; 
        }

    }  
    else{
        //mostra la lista delle moto come comboBox
        $listaMoto = leggiMoto();
        echo '<form id="formRichiesta" name="formRichiesta" method="get" action="visualizza_con_select.php">
            <select name="moto">';
           
        
            while($row = $listaMoto->fetch_assoc()) { // approccio ai risultati come array associativo
                echo "<option value='{$row["marca"]}'> {$row["marca"]} </option>";
            } 
               
            echo "</select>";
            echo ' <input type="submit"/>
            </form>';
    }
	
?>
</body>
</html>