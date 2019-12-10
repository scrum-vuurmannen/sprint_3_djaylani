<?php

    function create_table(){
        $conn = connect(2);
        $conn->query("CREATE TABLE IF NOT EXISTS product (
            naam VARCHAR(50) NOT NULL, 
            prijs DOUBLE(5,2) NOT NULL, 
            vooraad INTEGER NOT NULL, 
            categorieen VARCHAR(50) NOT NULL, 
            url_afbeelding VARCHAR(100) NOT NULL,
            PRIMARY KEY (naam)
            )");
        $conn = stop_connect();
    }

?>