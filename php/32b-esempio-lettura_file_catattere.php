<html>
<body>

<?php
	$mio_file=fopen("diritti.txt","r") or exit("Errore nell'apertura del file");
	echo "<h1>File correttamente aperto</h1>";
	echo "<hr />";
	//Lettura riga per riga
	while(!feof($mio_file))
	{
		$carattere = fgetc($mio_file);
		echo $carattere. "<br />";
	}
	echo "<hr />";
	fclose($mio_file);
	echo "<h1>File chiuso</h1>";
?>

</body>
</html>
