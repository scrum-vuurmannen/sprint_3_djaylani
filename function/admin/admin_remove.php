<?php

    function remove_data($naam){
        $conn = connect(2);
        $data = $conn->query("SELECT * from product WHERE naam='$naam'");
        $data = $data->fetchall(PDO::FETCH_ASSOC);
        if(sizeof($data) >0){
            $conn->query("DELETE FROM product WHERE naam='$naam'");
        }
        header("location:admin.php?screan=list");
        $conn = stop_connect();
    }

?>