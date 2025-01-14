<html>
<body>

<?php
	$mio_file=fopen("nuovo.txt","a+") or exit("Errore nell'apertura del file");
	echo "<h1>File nuovo.txt aperto</h1>";
	echo "<hr />";
	fwrite($mio_file, " - Parma");
	echo "<hr />";
	fclose($mio_file);
	echo "<h1>File chiuso</h1>";
?>

</body>
</html>