<html>
<body>

<?php
	$percorso = './file_scaricati';
	$cartella = opendir($percorso);
	while ($file = readdir($cartella)) {
	$file_array[] = $file;
	}

	foreach ($file_array as $file) {
	# se il file inizia con .. lo tralascio
	if ( $file == ".." || $file == ".") {
	continue;
	}
	#trovo i file e creo il link
	echo "<TR><TD><CENTER>";
	$e=substr(strrchr($file, "."), 0); // azzero l'estensione
	$a=""; //sostituisco lo spazio vuoto con il relativo codice html
	$b=" ";
	$nome1=ereg_replace($e, $a, $file); // sostituisco codice 1
	$nome=ereg_replace("_", "$b", $nome1); //sostituisco  codice 2. 

	echo "<a href=\"$percorso/$file\" title=\"$nome\" class=\"link1\"><b>$nome</b></a><br>"; //questo crea il link

	}
?>


</body>
</html>