<?php
    require 'peuple.class.php';

    $i = 0;
    while($i < 100){
        $good[$i] = new Individu('g'. $i, 20, true);
        $i++;
    }
    echo "<script> console.log('création des bons') </script>";

    $i = 0;
    while($i < 100){
        $bad[$i] = new Individu('b'. $i, 20, false);
        $i++;
    }
    echo "<script> console.log('création des mauvais') </script>";
//sfkjhsofhqosfnwosfnwosfkcn
    $i = 0;
    while($i < 100){
        $resentfull[$i] = new Special('r'. $i, 20, true);
        $i++;
    }
    echo "<script> console.log('création des rencuniers') </script>";

    function meating($g1, $g2){
        foreach($g1 as $perso1){
            foreach($g2 as $perso2){
                
                if(!($perso1->setTransac($perso1->getAction($perso2->getId)))){

                }
                if(!($perso2->setTransac($perso2->getAction($perso1->getId)))){
                    
                }

                
            }
        }
    }
    