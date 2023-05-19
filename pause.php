<?php

    $contador=isset($_POST['lenguajes']) ? count($_POST['lenguajes']):"" ;
    echo $contador;
    
    if ($contador >= 6){
        header ("Location: spunik.php");
    }elseif ( $contador >= 4 ){
        header ("Location: artemis.php");
    }elseif ( $contador >= 2){
        header ("Location: apolo.php");
    }
    else{
        echo "<h1>sorry my friend</h1>";
    }
?>
    
