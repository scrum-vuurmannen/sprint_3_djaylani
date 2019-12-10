<?php

    function vraag_data($sort, $categorie){
        $conn = connect(2);
        if($sort == "normaal"){
            if($categorie == "allemaal"){
                $data = $conn->query("SELECT * from product");
                $data = $data->fetchall(PDO::FETCH_ASSOC);
                return $data;
            }else{
                $data = $conn->query("SELECT * from product WHERE categorieen='$categorie'");
                $data = $data->fetchall(PDO::FETCH_ASSOC);
                return $data;
            }
            $conn = stop_connect();
        }else if($sort == "winkelmand"){
            $data = $conn->query("SELECT * from product WHERE naam='$categorie'");
            $data = $data->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }
    }

?>