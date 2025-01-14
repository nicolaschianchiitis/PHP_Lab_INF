<html>
<body>

<?php
	$mio_file=fopen("diritti.txt","r") or exit("Errore nell'apertura del file");
	echo "<h1>File diritti.txt aperto in lettura</h1>";
	fclose($mio_file);
	echo "<h1>File diritti.txt chiuso</h1>";
	$mio_file=fopen("nuovoFile.txt","w") or exit("Errore nell'apertura del file");
	echo "<h1>File nuovoFile.txt aperto in scrittura (file creato)</h1>";
	fclose($mio_file);
	echo "<h1>File nuovoFile.txt chiuso</h1>";
?>
<h3>Modalit� apertura file</h3>
<ul>
<li>r Per sola lettura.</li>
<li>r+ Per lettura e scrittura (scrive all'inizio del file). </li>
<li>w Per sola scrittura (I dati gi� scritti andranno persi e se il file non esiste sar� creato). </li>
<li>w+ Per scrittura e lettura (I dati gi� scritti andranno persi e se il file non esiste sar� creato. Scrive all'inizio del file). </li>
<li>a Per aggiungere (I dati saranno aggiunti in coda a quelli gi� scritti, se il file non esiste sar� creato.) </li>
<li>a+ Per aggiungere e lettura (I dati saranno aggiunti in coda a quelli gi� scritti, se il file non esiste sar� creato.) </li>
</ul>
</body>
</html>
