<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Visualizzazione dati dal database con MySQLi e OOP</title>
</head>

<body>
<?php
	require_once 'classChitarreDB.php';
	$classChitarre = new ChitarreDB();
	$dati = $classChitarre->getChitarrePerMarca('Gibson');
	echo "<table><tr><th>cod Chitarra</th><th>Modello</th><th>Marca</th></tr>";
	foreach($dati as $row) {
		echo "<tr><td>{$row["cod"]}</td><td>{$row["modello"]}</td><td>{$row["marca"]}</td></tr>";
	}
	echo "</table>";
?>
</body>
</html>