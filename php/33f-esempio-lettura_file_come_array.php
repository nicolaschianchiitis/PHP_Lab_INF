<html>
<body>

<?php
	$vettoreRighe = file("diritti.txt");
	foreach ($vettoreRighe as $numero => $valore) 
	{
		print("Riga $numero ($valore) <br \>");
	}

?>

</body>
</html>