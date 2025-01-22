<html>
   <head>
      <title>Visualizzazione di tutti i parametri passati con GET</title>
   </head>
   <body>
        <?php 
     	/* Visualizzazione di tutti i parametri */
         foreach ($_GET as $nome => $valore) 
        {
            print("il parametro $nome ha valore ($valore) <br>");
        }
        ?>
   </body>
</html>
