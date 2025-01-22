<?php
// inizia la session
session_start();

$_SESSION['contatore']=1;
?>

<html>
   <head>
      <title>Inizializzazione session</title>
   </head>
   <body>
        <?php 
			if (isset($_SESSION['contatore']))
				$cont = $_SESSION['contatore'];
			else 
				$cont = 0;
     	    echo "Contatore=$cont" ;
        ?>
   </body>
</html>
