<html>
   <head>
      <title>Array monodimensionale</title>
   </head>
   <body>
      <?php
		$vocali = array ("A", "E", "I", "O", "U");
		$vocali[8]="K";
		$vocali[]="J";
		for ($i=0; $i<12; $i++) 
		{
			print("*** $vocali[$i] <br>\n");
		}
      ?>
   </body>
</html>