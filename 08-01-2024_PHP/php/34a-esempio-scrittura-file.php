<html>
<body>

<?php
	$mio_file=fopen("nuovo.txt","w") or exit("Errore nell'apertura del file");
	echo "<h1>File nuovo.txt creato</h1>";
	echo "<hr />";
	fwrite($mio_file, "ITIS");
	fwrite($mio_file, " Leonardo ");
	fwrite($mio_file, "da Vinci");
	echo "<hr />";
	fclose($mio_file);
	echo "<h1>File chiuso</h1>";
?>

</body>
</html>