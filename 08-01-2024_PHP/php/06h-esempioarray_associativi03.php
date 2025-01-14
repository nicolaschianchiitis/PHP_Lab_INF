<html>
<body>

<?php
	$persone = array( 
					1 => array('nome' => 'Mario', 'cognome' => 'Rossi'), 
					2 => array('nome' => 'Paolo', 'cognome' => 'Bianchi')
					);

	foreach ($persone as $persona)
		//echo $indice , " ha " , $valore , " anni<br/>";
		print $persona['nome'] . ' ' . $persona['cognome'] . "<br/>";

?> 

</body>
</html> 