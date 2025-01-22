<html>
   <head>
      <title>passa parametri con GET</title>
   </head>
   <body>
<!--
   /* Valorizzazione di Nome e Cognome */

-->
    <?php 
	$_nome="pinco";
    $_cognome="pallino";
	
	echo "<A href='08a-recupera-GET.php?nome=".$_nome."&cognome=".$_cognome."'> pagina successiva </A>"
    ?>


   </body>
</html>