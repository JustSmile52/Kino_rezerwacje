<?php 
include_once('header.php')
?>
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
     
        echo '<div class="okladka"> <h3>'.$rekord['tytul filmu'].'</h3> <img src="../images/'.$okladka.'" width=15%"/> </div>';
        
        
        $id = $rekord['id'];
       
        $godziny = $link->query("SELECT film , godzina, id  FROM seanse WHERE film = $id");
        while($s = $godziny->fetch_array()){
            // echo '<div class="czasy>';
            // echo '<p> </p>';
            // echo '</div>';
             echo ' <div>
                    <form action="rezerwacje.php">
                    <input type="hidden" name="id" value='.$s['id'].'>
                    <input type="submit" class="godzina" value="'.$s['godzina'].'"/>
                    </form>
                    </div>';
             
        }
        

        echo '</div>';

	}
	//echo '</table>';	


    
?>
