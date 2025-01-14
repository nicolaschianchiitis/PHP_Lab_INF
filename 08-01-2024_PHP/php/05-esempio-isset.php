<html>
    <head>
        <title>esempio variabili</title>
    </head>
    <body>
        <?php 
		$a="ciao";
        if (isset($a))
			echo ('La variabile $a vale '.$a);
		else
			echo ('La variabile $a non ha valore');
        echo("<br \>");
		if (isset($b))
			echo ('La variabile $b vale '.$b);
		else
			echo ('La variabile $b non ha valore');
        ?>
    </body>
</html>
