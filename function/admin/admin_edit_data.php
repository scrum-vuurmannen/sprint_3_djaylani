<?php
    function admin_edit_data($edit,$naam,$prijs,$vooraad,$categorieen,$url_afbeelding){
        $conn = connect(2);
        $data = vraag_data("winkelmand", $edit);
        if($data > 0){
            $conn->query("UPDATE product SET naam='$naam', prijs='$prijs', vooraad='$vooraad', categorieen='$categorieen', url_afbeelding='$url_afbeelding' WHERE naam='$edit'");
            header("location:admin.php?screan=list");
        }
        $conn = stop_connect();
    }
?>