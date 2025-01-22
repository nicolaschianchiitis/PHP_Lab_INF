<html>
   <head>
      <title>Hello World in PHP</title>
	  <script type="text/javascript">
<!--
  var data = new Date();
  var Hh, Mm, Ss, mm;
  var testoOrario;
  Hh = data.getHours() + ":";
  Mm = data.getMinutes() + ":";
  Ss = data.getSeconds() + ":";
  mm = data.getMilliseconds() + ":";
  testoOrario = "mentre sul browser sono le ore " + Hh + Mm + Ss + mm;
//-->
</script>
   </head>
   <body>
      <p>
        <?php 
     	/* Questo è il nostro primo script PHP */
        echo "Oggi è il ";
        print(Date("l F d, Y"));
        echo "<br>";
        echo "Sul server sono le ";
        print(Date("h:i:s"));		
        echo "<br>";
        ?> 

      </p>
	  <p>
		<script type="text/javascript">
			<!--
			  document.write(testoOrario);
			//-->
		</script>
	  </p>
   </body>
</html>
