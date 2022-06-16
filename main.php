
<?php

session_start();
$link = new mysqli("localhost","root","", "bozek");
$seanse= $link->query("SELECT `tytul filmu`, godzina , seanse.id FROM seanse INNER JOIN filmy ON seanse.film = filmy.id");

echo '<table border=1>';
	echo '<tr><th>Lp</th><th>film</th><th>godzina</th></tr>';
	$lp=1;
	while($rekord=$seanse->fetch_array())
	{
        echo 
        '<form action="rezerwacje.php" >
        <tr>
        <input type="hidden" name="id" value='.$rekord['id'].'>
        <td>'.$lp.'</td>
        <td>'.$rekord['tytul filmu'].'</td>
        <td>'.$rekord['godzina'].'</td>
        <td><input  type="submit" value="rezerwuj"></td>
        </tr>
        </form>';
		$lp++;
	}
	echo '</table>';	


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>