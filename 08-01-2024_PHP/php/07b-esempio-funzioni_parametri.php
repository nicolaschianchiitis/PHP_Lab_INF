<html>
<body>

<?php
	function scriviNome($nomeParametro)
	{
		echo ("Il mio nome e' " . $nomeParametro . "<br \>");
	}

	scriviNome("Jack");
	$nome="John";
	scriviNome($nome);
?>

</body>
</html> 