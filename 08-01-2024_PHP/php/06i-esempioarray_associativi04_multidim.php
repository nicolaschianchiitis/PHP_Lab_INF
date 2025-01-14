<html>
<body>

<?php
	$carrello = array();
  
	$articolo = array('id'     => 'PEN DRIVE',
					'num'    => 3,
					'prezzo' => rand(2, 2000)
			);
	array_push($carrello, $articolo);
  
	$articolo = array('id'     => 'PC INTEL i7',
					'num'    => 1,
					'prezzo' => rand(2, 2000)
			);
	array_push($carrello, $articolo);
	
	foreach($carrello as $riga) {
		echo $riga['id'].
	     "  Num Pezzi ".
		 $riga['num'].
		 "  Euro ".
		 $riga['prezzo']
		 ."<br />";
	}

	//$risultato = array_search("PEN DRIVE", array_column($carrello, 'id'));
	$risultato = array_search("PC INTEL i7", array_column($carrello, 'id'));
	print_r($carrello[$risultato]);
?> 

</body>
</html> 