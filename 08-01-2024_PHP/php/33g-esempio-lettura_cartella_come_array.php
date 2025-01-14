<html>
<body>

<?php
	$vettoreRighe = file("file_scaricati");
	foreach ($vettoreRighe as $numero => $valore) 
	{
		print("Riga $numero ($valore) <br \>");
	}

?>

</body>
</html>