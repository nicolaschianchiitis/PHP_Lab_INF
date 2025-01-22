<html>
<body>

<?php 
	// Nota che l'operatore !== non è esistito fino alla versione 4.0.0-RC2 
	if ($handle = opendir('file_scaricati')) { 
		echo "Handle della directory: $handle <br />"; 
		echo "File:<br />"; 

	   /* Questa è la maniera corretta di eseguire un loop all'interno di una directory. */ 
	   while (false !== ($file = readdir($handle))) { 
		   echo "$file<br />"; 
	   } 

	   closedir($handle); 
	} 
?> 



</body>
</html>