<?php
    function betaal(){
        echo "<p>";
        echo "<table>";
        echo "<tr><th>Naam</th> <th>prijs</th> <th>aantal</th> <th>totaal</th></tr>";
        $subtotaal =0;
        $f =0;
        $size = sizeof($_SESSION['winkelmand']) - 1;
        foreach($_SESSION['winkelmand'] as $i=>$x){
            $data = vraag_data("winkelmand",$_SESSION['winkelmand'][$i]['naam']);
            $subtotaal+=$_SESSION['winkelmand'][$i]['totaal'];

            ?>
            <tr class="betaal-table-normaal">
                <td class="een"><?php echo $_SESSION['winkelmand'][$i]['naam'] ?></td>
                <td class="twee"><?php echo $_SESSION['winkelmand'][$i]['prijs'] ?></td>
                <td class="een"><?php echo $_SESSION['winkelmand'][$i]['aantal'] ?></td>
                <td class="twee">€<?php echo$_SESSION['winkelmand'][$i]['totaal'] ?></td>
            </tr>
            <?php 
                if($f < $size){
                    $f++;
                    echo '<tr><td class="een"><hr></td><td class="twee"><hr></td><td class="een"><hr></td><td class="twee"><hr></td></tr>';
                }
            ?>
            <?php

            $naam = $data[0]['naam'];
            $prijs = $data[0]['prijs'];
            $vooraad = $data[0]['vooraad'] - $_SESSION['winkelmand'][$i]['aantal'];
            $categorieen = $data[0]['categorieen'];
            $url_afbeelding = $data[0]['url_afbeelding'];

            // var_dump($naam);
            // var_dump($prijs);
            // var_dump($aantal);
            // var_dump($categorieen);
            // var_dump($url_afbeelding);

            stuur_data($naam, $prijs, $vooraad, $categorieen, $url_afbeelding);

        }

        $btw = $subtotaal/100*21;
        $totaal = $subtotaal+$btw;
        ?>
            <tr><td></td><td></td><td class="een"><hr></td><td class="twee"><hr></td></tr>
            <tr class='betaal-table-normaal'>
                <td></td>
                <td></td>
                <td id='betaal-table-totaal' class="een"><b>Sub Totaal:</b></td>
                <td class="twee">€<?php echo number_format($subtotaal, 2);?></td>
            </tr>
            <tr><td></td><td></td><td class="een"><hr></td><td class="twee"><hr></td></tr>
            <tr class='betaal-table-normaal'>
                <td></td>
                <td></td>
                <td id='betaal-table-totaal' class="een"><b>21% BTW:</b></td>
                <td class="twee">€<?php echo number_format($btw, 2);?></td>
            </tr>
            <tr><td></td><td></td><td class="een"><hr></td><td class="twee"><hr></td></tr>
            <tr class='betaal-table-normaal'>
                <td></td>
                <td></td>
                <td id='betaal-table-totaal' class="een"><b>Totaal:</b></td>
                <td class="twee">€<?php echo number_format($totaal, 2);?></td>
            </tr>
            </table>
        
        
        <?php
        unset($_SESSION['winkelmand']);
            
    }

?>