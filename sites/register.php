<?php
include_once('header.php')
?>
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

<?php
    if(isset($_GET['error'])){
        if($_GET['error']=="none"){
            echo"Dodano użytkownika";   
        }
        if($_GET['error']=="emptyInput"){
            echo"Uzupełnij wszystkie pola!";   
        }
        if($_GET['error']=="pwdMatching"){
            echo"hasła nie są takie same";   
        }
        if($_GET['error']=="loginAlreadyExists"){
            echo"użytkownik o takiej nazwie już istnieje";   
        }
    }

?>
</body>

</html>
