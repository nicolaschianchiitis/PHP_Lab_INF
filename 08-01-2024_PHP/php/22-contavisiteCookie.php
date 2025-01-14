<html>
	<?php
	session_start();
	?>
   <head>
      <title>Visualizzazione di tutti i parametri passati con GET</title>
   </head>
   <body>
        <?php
		$contavisite = 1;
		if (isset($_COOKIE['contavisite']))
			$contavisite = ((int)$_COOKIE['contavisite'])+1;
		//echo $_COOKIE['contavisite']."<br>";
		setcookie("contavisite", strval($contavisite), time()+3600, '/');
     	/* Visualizzazione di tutti i parametri */
        foreach ($_COOKIE as $nome => $valore)
        {
			print("il cookie $nome ha valore ($valore) <br>");
        }
        ?>
   </body>
</html>
