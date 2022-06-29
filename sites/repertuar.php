<?php
include_once('header.php')
?>
</body>

</html>

<?php

session_start();
$link = new mysqli("localhost", "root", "", "bozek");
//$seanse = $link->query("SELECT `tytul filmu`, godzina , seanse.id, zdjecie  FROM seanse INNER JOIN filmy ON seanse.film = filmy.id");
$seansiki = $link->query("SELECT id, `tytul filmu` , zdjecie  FROM filmy ");

while ($rekord = $seansiki->fetch_array()) {

    $okladka = $rekord['zdjecie'];
    echo '<div class="film">';

    echo '<div class="okladka"> <h3>' . $rekord['tytul filmu'] . '</h3> <img src="../images/' . $okladka . '" width=15%"/> </div>';
    $id = $rekord['id'];
    $godziny = $link->query("SELECT film , godzina, id  FROM seanse WHERE film = $id");
    while ($s = $godziny->fetch_array()) {

        echo ' <div>
                    <form action="rezerwacje.php">
                    <input type="hidden" name="id" value=' . $s['id'] . '>
                    <input type="submit" class="godzina" value="' . $s['godzina'] . '"/>
                    </form>
                    </div>';
    }


    echo '</div>';
}




?>
