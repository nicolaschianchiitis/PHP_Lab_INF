<html>
<body>

<?php
	$esiste = file_exists("diritti.txt");
	if ($esiste)
		echo "il file esiste";
	else
		echo "il file non esiste";
?>

</body>
</html>