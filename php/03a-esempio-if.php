<html>
   <head>
      <title>Esito del prelievo</title>
   </head>
   <body>
      <?php
      $Saldo = -123;
      if($Saldo <= 0)
      {
		  print("<h3>Spiacente</h3>");
		  print("<h3>Il tuo saldo è di euro: $Saldo</h3>");
		  print("<h3>Non esiste disponibilità per effettuare il prelievo!</h3>");
      }
      else
      {
		print("<h3>Autorizzazione concessa.</h3>");
      }
      ?>
   </body>
</html>