<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Calibri';
            font-size: 20px;
        }

        a:visited {
            color: blue;
        }
    </style>
</head>
<body>
    <center>
        <?php
            $utenti = [
                [
                    "Codice" => 0,
                    "User" => "admin",
                    "Nome" => "Amministratore",
                    "Cognome" => "Assoluto",
                    "Email" => "admin@phpcodes.it",
                    "Password" => "Admin29@"
                ],
                [
                    "Codice" => 1,
                    "User" => "niky2k6",
                    "Nome" => "Nicola",
                    "Cognome" => "Schianchi",
                    "Email" => "niky2006pr@gmail.com",
                    "Password" => "NS_R0ck€r"
                ],
                [
                    "Codice" => 2,
                    "User" => "mclobos",
                    "Nome" => "Michele Christian",
                    "Cognome" => "Lobos",
                    "Email" => "smichele.lobos@itis.pr.it",
                    "Password" => "ML_php=00x00"
                ],
            ];

            if (isset($_GET['getEmail'])) {

            } else if (isset($_GET['disconnect'])) {

            } else if (isset($_GET['login'])) {
                foreach ($utenti as $usr) {
                    if ($usr->)
                }
            } else {
                echo '<form action="login.php?login" method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username"><br>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"><br>
                        <button type="submit">Accedi</button>
                      </form>';
            }
        ?>
        <a href="menu.html">Torna al men&ugrave;</a>
    </center>
</body>
</html>