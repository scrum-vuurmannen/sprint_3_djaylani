<?php

    function stuur_data($naam, $prijs, $vooraad, $categorieen, $url_afbeelding){
        $conn = connect(2);
        $data = $conn->query("SELECT * from product WHERE naam='$naam'");
        $data = $data->fetchall(PDO::FETCH_ASSOC);
        $id = $conn->query("SELECT * from product");
        $id = $id->fetchall(PDO::FETCH_ASSOC);
        $id = sizeof($id);
        if(sizeof($data) >0){
            // echo "ja";
            $conn->query("UPDATE product SET prijs='$prijs', vooraad='$vooraad', categorieen='$categorieen', url_afbeelding='$url_afbeelding' WHERE naam='$naam'");
           }else{
            
            $conn->query("INSERT INTO product VALUES('$naam','$prijs','$vooraad','$categorieen','$url_afbeelding')");
        }
        $conn = stop_connect();

    }

?>