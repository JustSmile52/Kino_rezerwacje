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
                <div class="navigation">
                    <ul>
                        <li>
                            <a style="float: left;margin:2px; font-size: 15px;" href="repertuar.php">Repertuar</a>
                        </li>
                        <li>
                            <a href="#">kontakt</a>
                        </li>
                    </ul>
                </div>

                <form method="POST" class="form" action="../scripts_php/login.php">
                    <b>Login:</b> <input type="text" name="login"><br><br>
                    <b>Hasło:</b> <input type="password" name="haslo"><br>
                    <input style="float:right; " type="submit" name="submit" value="zaloguj">
                    <?php
            if(isset($_SESSION)){
                echo "<a style='float: left;margin:2px' href='../scripts_php/logout.php'>wyloguj</a>";
            }
            else{
                echo "<a style='float: left;margin:2px' href='register.php'>Nie masz konta? zarejestruj się</a>";
            }
            ?>


                </form>

            </div>

        </header>
