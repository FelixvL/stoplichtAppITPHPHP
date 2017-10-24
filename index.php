<?php
    $kleurStoplicht = $_GET['kleur'];
    $afstandTotStoplicht = $_GET['afstand'];
    
    echo $kleurStoplicht;
    echo $afstandTotStoplicht;
    echo "<br><br>";
    if($kleurStoplicht == "rood"){// als het rood is
         echo "stoppen";
        
    }else{
        if($kleurStoplicht == "geel" and $afstandTotStoplicht > 15){ // als oranje EN dichtbij
            echo "stoppen";
        }else{
            echo "doorrijden";
        }
    }

?>