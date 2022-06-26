<?php
include_once('header.php')
?>
<div class="content">
    <div class="block1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos asperiores cumque facere, adipisci
        sapiente minima dignissimos, esse voluptate fugiat excepturi reiciendis est doloremque nam ducimus ullam quidem
        natus neque debitis?
    </div>
    <div class="block1up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere.</div>
    <div class="block1down">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, omnis.</div>
</div>
</body>

</html>
<?php
    if(isset($_GET['loggin_error'])){
        if($_GET['loggin_error']==false){
            echo "siema";
        }
    }
    
    if(isset($_SESSION)){
        echo $_SESSION['login'];
    }
?>
