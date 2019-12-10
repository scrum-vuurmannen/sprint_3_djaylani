<?php

    function create_database() {
        $conn = connect(1);
        $conn->query("CREATE DATABASE IF NOT EXISTS vuurwerk_voorraad");
        $conn = stop_connect();
    }

?>