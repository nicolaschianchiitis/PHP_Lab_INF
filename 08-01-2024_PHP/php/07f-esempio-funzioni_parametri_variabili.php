<html>
<body>

<?php
	function stampa()
	{
		for($i=0;$i<func_num_args();$i++)
			echo func_get_arg($i);
		echo "<br>";	
	}
	stampa("verde ","blu ");
	stampa("nero ");
?>

</body>
</html> 