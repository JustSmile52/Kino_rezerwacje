<?php
session_start();
$link = new mysqli("localhost","root","", "bozek");


$seansik = $_GET["id"];

$_SESSION['seans']=$seansik;

$rezerwacje =  $link->query("SELECT `miejsce` FROM `rezerwacje` WHERE seans = '".$seansik."'");
$lp=1;
//while($rekord=$rezerwacje->fetch_array())
	// {
    //     echo 
        
    //     '<form >
    //     <tr>
    //     <td>'.$lp.'</td>
    //     <td>'.$rekord['miejsce'].'</td>
    //     </tr>
    //     </form>';
    //     		$lp++;
	// }

    echo '<form action = "zarezerwowane.php" >';
    echo '<div class = "main"> ';
    for($i = 1; $i<301 ; $i++){
        while($rekordzik=$rezerwacje->fetch_array()){
            
            if($rekordzik['miejsce'] == $i){

                echo '<div class = "czerwony"> </div>';
                $i++;
            }
            

        }
        $rezerwacje =  $link->query("SELECT `miejsce` FROM `rezerwacje` WHERE seans = '".$seansik."'");
            echo '<div class = "maly">
                <input class = "check" type = "checkbox" name="miejsce[]" value = "'.$i.'"/> 
                </div>';
       
    }
    
    echo '<input  type="submit" value="rezerwuj">';
    echo'</div>' ;
    echo '</form>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .main {
            border: solid 1px black;
            width: 600px;
            height: 600px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .maly {
            width: 5%;
            height: 5%;
            background-color: green;
        }

        .czerwony {
            width: 5%;
            height: 5%;
            background-color: red;
        }
    </style>
</head>

<body>

</body>

</html>