<?php

    function connect($vazen){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB="vuurwerk_voorraad";
        if($vazen == 1){ //connect niet meteen naar en database
            try {
                $conn = new PDO("mysql:host=$servername", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully";
                return $conn;
                }
            catch(PDOException $e)
                {
                //echo "Connection failed: " . $e->getMessage();
                }
        }else if($vazen == 2){ //connect meteen naar een database
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$DB", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully";
                return $conn;
                }
            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
                }
        }
    }



?>