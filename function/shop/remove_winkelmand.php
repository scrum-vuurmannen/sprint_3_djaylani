<?php

    function remove(){
        if(isset($_GET['action']) && $_GET['action'] == "remove"){
            if($_GET['product'] == "all"){
                unset($_SESSION['winkelmand']);
                header("Location:vuurwerk.php?categorie=" . $_GET["categorie"]);
            }else{
                $size = sizeof($_SESSION['winkelmand']);
                $naam = $_GET['product'];
                
                foreach ($_SESSION['winkelmand'] as $i=>$x){
                    if($_SESSION['winkelmand'][$i]['naam'] == $naam){
                        unset($_SESSION['winkelmand'][$i]);
                        header("Location:vuurwerk.php?categorie=" . $_GET["categorie"]);
                    }
                }
            }
        }
    }


?>