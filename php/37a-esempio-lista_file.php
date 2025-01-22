<html>
<body>

<?php
	// Selezione della cartella
	$cartella = opendir('./file_scaricati');
	while ($nome_file = readdir($cartella)) {
		echo "$nome_file <br />";
	}

?>


</body>
</html>