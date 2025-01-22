<html>
<body>

<?php


     	/* Visualizzazione di tutti i parametri */
         foreach ($_FILES['nome_file'] as $nome => $valore) 
        {
            print("il parametro $nome ha valore ($valore) <br>");
        }

		$cartella = "file_scaricati/";
		copy($_FILES['nome_file']['tmp_name'],$cartella.$_FILES['nome_file']['name']);
?>
</body>
</html>