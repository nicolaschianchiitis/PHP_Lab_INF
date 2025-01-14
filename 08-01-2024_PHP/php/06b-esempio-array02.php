<html>
	<head>
      <title>Array monodimensionale</title>
	</head>
	<body>
      <?php
		$vocali = array ("A", "E", "I", "O", "U");
		$vocali[5]="K";
		$vocali[]="J";
		for ($i=0; $i<7; $i++) 
		{
			print($vocali[$i] ."<br>\n");
		}
      ?>
   </body>
</html>