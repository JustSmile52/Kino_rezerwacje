<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <header class="header">
            <div>
                <h1 class="logo">KINO</h1>


            </div>

        </header>
        <h2 style="text-align:center">rejestracja</h2>
        <div class="register">

            <div class="rejestrator">
                <form method="POST" action="../scripts_php/rejestracja.php">
                    <b>Login:</b> <input type="text" name="login"><br><br>
                    <b>Hasło:</b> <input type="password" name="haslo1"><br>
                    <b>Powtórz hasło:</b> <input type="password" name="haslo2"><br>
                    <button type="submit" name="submit" value="submit">zarejestruj</button>
                </form>
                <a href="../sites/main.php">powrót do strony głównej</a>
            </div>

        </div>
    </body>

</html>
