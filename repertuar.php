
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div>
            <h1 class="logo">KINO</h1>
            <div class="navigation">
                <ul>
                    <li>
                        <a style="float: left;margin:2px; font-size: 15px;" href = "repertuar.html">Repertuar</a>
                    </li>
                    <li>
                        <a href="#">kontakt</a>
                    </li>
                </ul>
            </div>
            
            <form method="POST"  class="form" action="login.php">
            <b>Login:</b> <input type="text" name="login"><br><br>
            <b>Hasło:</b> <input type="password" name="haslo"><br>
            <input style="float:right; " type="submit" value="zaloguj" >
            <a style="float: left;margin:2px"href = "register.html">Nie masz konta? zarejestruj się</a>

        </form>
            
        </div>
        
    </header>
</body>
</html>

<?php

session_start();
$link = new mysqli("localhost","root","", "bozek");
$seanse= $link->query("SELECT `tytul filmu`, godzina , seanse.id, zdjecie  FROM seanse INNER JOIN filmy ON seanse.film = filmy.id");
$seansiki = $link->query("SELECT id, `tytul filmu` , zdjecie  FROM filmy ");
//echo '<table border=1>';
	//echo '<tr><th>Lp</th><th>film</th><th>godzina</th></tr>';
	$lp=1;
	while($rekord=$seansiki->fetch_array())
	{
        // echo 
        // '<form action="rezerwacje.php" >
        // <tr>
        // <input type="hidden" name="id" value='.$rekord['id'].'>
        // <td>'.$lp.'</td>
        // <td>'.$rekord['tytul filmu'].'</td>
        // <td>'.$rekord['godzina'].'</td>
        // <td><input  type="submit" value="rezerwuj"></td>
        // </tr>
        // </form>';
		// $lp++;
        $okladka = $rekord['zdjecie'];
        echo '<div class="film">';
     
        echo '<div class="okladka"> <h3>'.$rekord['tytul filmu'].'</h3> <img src="./images/'.$okladka.'" width=15%"/> </div>';
        
        
        $id = $rekord['id'];
       
        $godziny = $link->query("SELECT film , godzina  FROM seanse WHERE film = $id");
        while($s = $godziny->fetch_array()){
            // echo '<div class="czasy>';
            // echo '<p> </p>';
            // echo '</div>';
             echo ' <div>
                    <form action="rezerwacje.php">
                    <input type="hidden" name="id" value='.$rekord['id'].'>
                    <input type="submit" class="godzina" value="'.$s['godzina'].'"/>
                    </form>
                    </div>';
             
        }
        

        echo '</div>';

	}
	//echo '</table>';	


    
?>