<?php
// inizia la session
session_start();
?>
<html>
   <head>
      <title>Leggi variabile session</title>
   </head>
   <body>
        <?php 
			if (isset($_SESSION['contatore']))
				$_SESSION['contatore']=$_SESSION['contatore']+1;
			else 
				$_SESSION['contatore']=1;
			$cont = $_SESSION['contatore'];
     	    echo "Contatore=$cont" ;
        ?>
   </body>
</html>
