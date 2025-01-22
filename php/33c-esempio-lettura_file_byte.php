<html>
<body>

<?php
	$mio_file=fopen("diritti.txt","r") or exit("Errore nell'apertura del file");
	echo "<h1>File correttamente aperto</h1>";
	echo "<hr />";
	echo "la dimensione del file e' ".filesize("diritti.txt")."<br />";
	//Lettura 10 byte per volta
	while(!feof($mio_file))
	{
		$stringa = fread($mio_file,10);
		echo $stringa. "<br />";
	}
	echo "<hr />";
	fclose($mio_file);
	echo "<h1>File chiuso</h1>";
?>

</body>
</html>