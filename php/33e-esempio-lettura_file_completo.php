<html>
<body>

<?php
	$mio_file=fopen("diritti.txt","r") or exit("Errore nell'apertura del file");
	echo "<h1>File correttamente aperto</h1>";
	echo "<hr />";
	//Lettura dell'intero file
	$contenuto = fread($mio_file,filesize("diritti.txt"));
	//Visualizzazione	
	echo $contenuto. "<hr />";
	echo "<hr />";
	//Visualizzazione con a capo
	$contenutoFormattato = nl2br($contenuto);
	echo $contenutoFormattato. "<hr />";
	echo "<hr />";
	fclose($mio_file);
	echo "<h1>File chiuso</h1>";
?>

</body>
</html>