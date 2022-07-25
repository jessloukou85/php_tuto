<?php
    $title = 'jeu';
    $msg = '';
    include "header.php";
    $a_imaginer = 150;
    ?>
<form action="/jeu.php" method="get">    
    <input type="number" name="chiffre" placeholder="entrer un nombre de 0 à 1000">
    <button>A Deviner</button>

        <?php if ($_GET['chiffre']> $a_imaginer){
                    $msg ="le nombre entrer est superieur";
        }else{
                    $msg ='nombre trop petit';
        }
        ?>
    
</form>
    

<?php  include 'footer.php' ?>