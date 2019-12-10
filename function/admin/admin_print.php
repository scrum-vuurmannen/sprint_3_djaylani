<?php

    function admin_print(){
        $data = vraag_data("normaal", "allemaal");
        $size = sizeof($data);
        $f =1;
        echo "<table>";
        echo "<tr><th>naam</th><th>prijs</th><th>vooraad</th><th>categorie</th><th>url_afbeelding</th><th>aanpassen</th><th>verwijder</th></tr>";

        for($i=0;$i<$size;$i++){
            echo "<tr>";
            echo "<td class='een'>" . $data[$i]['naam'] . "</td>";
            echo "<td class='admin-list-center twee'>" . $data[$i]['prijs'] . "</td>";
            echo "<td class='admin-list-center een'>" . $data[$i]['vooraad'] . "</td>";
            echo "<td class='admin-list-center twee'>" . $data[$i]['categorieen'] . "</td>";
            echo "<td class='een'>" . $data[$i]['url_afbeelding'] . "</td>";
            echo "<td class='admin-list-center twee'><a href='admin.php?screan=edit&product=" . $data[$i]['naam'] . "'><img src='img/edit.png' width='20' height='20'></a></td>";
            echo "<td class='admin-list-center een'><a href='admin.php?screan=list&action=remove&product=" . $data[$i]['naam'] . "'><img src='img/close.png'></a></td>";
            echo "</tr>";
            if($f < $size){
                $f++;
                echo '<tr><td class="een"><hr></td><td class="twee"><hr></td><td class="een"><hr></td><td class="twee"><hr></td><td class="een"><hr></td><td class="twee"><hr></td><td class="een"><hr></td></tr>';
            }
        }
        echo "</table>";
    }

?>