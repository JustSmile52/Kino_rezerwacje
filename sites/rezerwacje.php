 <!DOCTYPE html>
 <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>

         <style>
         .main {

             width: 650px;
             height: 650px;
             display: flex;
             flex-direction: row;
             flex-wrap: wrap;
             padding: 2px;
             margin: 0 auto
         }

         .unchecked {
             width: 5%;
             height: 5%;
             background-color: green;
             margin-right: 1px;


         }

         .checked {
             width: 5%;
             height: 5%;
             background-color: lightgreen;
             margin-right: 1px;
         }

         .czerwony {
             width: 5%;
             height: 5%;
             background-color: red;
             margin-right: 1px;
         }

         </style>
         <script>
         let rezerwacje = []
         pomocnicza = 0

         function lista(id) {


             if (document.getElementById(id).classList[0] == "unchecked") {
                 document.getElementById(id).classList.add("checked")
                 document.getElementById(id).classList.remove("unchecked")
                 rezerwacje.push(id)
             } else {
                 document.getElementById(id).classList.remove("checked")
                 document.getElementById(id).classList.add("unchecked")
                 for (i = 0; i < rezerwacje.length; i++) {
                     if (rezerwacje[i] == id) {
                         pomocnicza = i
                         console.log(pomocnicza)
                         rezerwacje.splice(i, 1)
                     }
                 }
             }
             document.getElementById("sprawdzacz").value = rezerwacje.toString()
             console.log(document.getElementById("sprawdzacz").value)

         }

         function miejsca() {
             console.log(document.getElementById("sprawdzacz").value)
             return (rezerwacje)

         }
         </script>
     </head>

     <body>

     </body>

 </html>
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

    echo '<form action = "../scripts_php/zarezerwowane.php" >';
    echo '<div class = "main"> ';
    for($i = 1; $i<305 ; $i++){
        while($rekordzik=$rezerwacje->fetch_array()){
            
            if($rekordzik['miejsce'] == $i){

                echo '<div class = "czerwony"> </div>';
                $i++;
            }
            

        }
        $rezerwacje =  $link->query("SELECT `miejsce` FROM `rezerwacje` WHERE seans = '".$seansik."'");
            echo '<div class = "unchecked" id="'.$i.'" onclick="lista('.$i.')">
                
                </div>';
       
    }
    echo '<input id="sprawdzacz" type=hidden value="" name="zajete[]">';
    echo '<input  type="submit" value="rezerwuj">';
    echo'</div>' ;
    echo '</form>';

?>
