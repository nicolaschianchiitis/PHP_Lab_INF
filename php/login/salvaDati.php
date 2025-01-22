<html>
	<body>
		<?php
		
			$user = $_POST["username"];
			$nomeFile = $_POST["username"].".txt";
			$password = $_POST["password"];
			$mail = $_POST["email"];
			$data = $_POST["data"];
			// Se il file esiste già
			if (file_exists($nomeFile))
			{
				echo "Utente già esistente";
				die("");
			}
			$file = fopen($nomeFile, "w+");
			//Se il file non esiste 
			fwrite($file, md5($password)."\r\n");// \r\n per andare a capo nel file
			fwrite($file, $mail."\r\n"); // mail
			fwrite($file, $data);// data di nascita
		?>
	</body>
</html>