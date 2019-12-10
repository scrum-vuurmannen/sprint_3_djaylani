<?php

// session_start();


    function add_start(){
        // unset($_SESSION['winkelmand']);
        if(empty($_SESSION['winkelmand'])){
            $_SESSION['winkelmand'] = array();
        }

        if(isset($_GET['action']) && $_GET['action'] == "add"){
            $size = sizeof($_SESSION['winkelmand']);
            $check = 0;

            foreach ($_SESSION['winkelmand'] as $i=>$x){
                if($_SESSION['winkelmand'][$i]['naam'] == $_GET['product']){
                    $check =1;
                    add_2($i);
                }
            }
            if($check == 0){
                add_1();
            }
        }

        // var_dump($_SESSION['winkelmand']);
    }

    function add_1(){
        $product = $_GET['product'];

        $data = vraag_data("winkelmand", $product);

        var_dump($data);
            
            
        $prijs = $data[0]['prijs'];
        $aantal = $_POST['hoeveel'];
        if($aantal > $data[0]['vooraad']){
            $aantal = $data[0]['vooraad'];
        }

        $totaal = $prijs * $aantal;




        //zet het product in de winkelmand
        $send = array("naam"=>$product,"prijs"=>$prijs,"aantal"=>$aantal,"totaal"=>$totaal);
        array_push($_SESSION['winkelmand'], $send);
        var_dump($_SESSION['winkelmand']);

        header("Location:vuurwerk.php?categorie=" . $_GET["categorie"]);

            //clear
        unset($product);
        unset($prijs);
        unset($aantal);
        unset($send);
    }

    function add_2($i){
        $product = $_GET['product'];

        $data = vraag_data("winkelmand", $product);

        var_dump($data);
            
            
        $prijs = $data[0]['prijs'];
        $aantal = $_SESSION['winkelmand'][$i]['aantal'] + $_POST['hoeveel'];
        if($aantal > $data[0]['vooraad']){
            $aantal = $data[0]['vooraad'];
        }
        




        //zet het product in de winkelmand
        $_SESSION['winkelmand'][$i]['aantal'] = $aantal;

        header("Location:vuurwerk.php?categorie=" . $_GET["categorie"]);

            //clear
        unset($product);
        unset($prijs);
        unset($aantal);
        unset($send);
    }

?>