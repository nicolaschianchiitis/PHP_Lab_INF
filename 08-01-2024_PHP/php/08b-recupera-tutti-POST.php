<html>
   <head>
      <title>Visualizzazione di tutti i parametri passati con POST</title>
   </head>
   <body>
        <?php 
     	/* Visualizzazione di tutti i parametri */
         foreach ($_POST as $nome => $valore) 
        {
            print("il parametro $nome ha valore ($valore) <br>");
        }
        ?>
   </body>
</html>
