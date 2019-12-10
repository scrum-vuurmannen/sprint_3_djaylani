<?php


    $maaker = "djaylani versteegh";
    //categorie
    function categorie($get){
        $list = array("allemaal", "Knal", "Sier", "pakket");
        $size = sizeof($list);

        if($get == "nav"){
            for($i=0;$i<$size;$i++){
                echo '<li><a class="normaal" href="vuurwerk.php?categorie=' . $list[$i] . '">' . $list[$i] . '</a></li>';
            }
        }else if($get == "admin"){
            
        }
    }



?>