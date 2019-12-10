<?php

    function print_data($sort,$categorie){
        $data = vraag_data($sort,$categorie);

        if($data >0){
            $size = sizeof($data);
            $count = 1;
            // echo "<table>";
            // echo "<tr>";
            for($i=0;$i < $size;$i++){
                if($count == 4){
                    echo "</tr><tr>";
                    $count++;
                }else{
                    $count++;
                }
                // echo "<td>";
                // echo '<img src="img/' . $data[$i]["img_naam"] . '">';
                // echo "<br>";
                // echo "Naam: " . $data[$i]["naam"];
                // echo "<br>";
                // echo "Prijs: " . $data[$i]["prijs"];
                // echo "<br>";
                // echo "Voorraad: " . $data[$i]["vooraad"];
                // echo "</td>";

                ?>
                    <div>
                        <form name ="<?php echo $data[$i]['naam']; ?>" method="post" action="vuurwerk.php?categorie=<?php echo $categorie; ?>&action=add&product=<?php echo $data[$i]['naam']; ?>">
                            <img src="<?php echo $data[$i]['url_afbeelding'];?>">
                            <?php
                                if($data[$i]['vooraad'] == 0){
                                    echo '<img id="sold-out" src="img/sold-out.png">';
                                }
                            ?>
                            <h4>Naam: <?php echo $data[$i]['naam'];?></h4>
                            <h4>Prijs: <?php echo $data[$i]['prijs'];?></h4>
                            <h4>Vooraad: <?php echo $data[$i]['vooraad'];?></h4>
                            <h4>Categorie: <?php echo $data[$i]['categorieen']?></h4>
                            <input type="text" name="hoeveel" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $data[$i]['naam'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $data[$i]['prijs']?>">
                            <br>
                            <input type="submit" name= "add_to_cart" value="voeg toe">
                        </form>
                    </div>
                <?php
                
            }
            // echo "</tr>";
        }
    }

?>