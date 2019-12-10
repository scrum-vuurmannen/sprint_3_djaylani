<?php
    include "functions.php";
    session_start();

    create_database();
    create_table();
    set_data();

    // $data = vraag_data("all");
    // var_dump($data);


    if(!isset($_GET["categorie"])){
        header("Location:vuurwerk.php?categorie=allemaal");
    }

    add_start();
    remove();
    // var_dump($_SESSION['winkelmand']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>vuurwerk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="shop">
        <div id="head-text">
            <a href="admin.php?screan=login"><img src="img/logo.png" height="50" width="50"></a>
            <h1>Vuurmannen<?php
            if($_GET["categorie"] != "all"){
                echo "   -    " . $_GET["categorie"];
            } ?></h1>
        </div>    
        <div id="nav">
            <nav id="head-nav">
                <ul>
                    <li><a class="normaal" href="index.php">Home</a></li>
                    <li><a class="normaal" href="vuurwerk.php?categorie=allemaal">Vuurwerk</a>
                        <ul>
                            <?php categorie("nav"); ?>
                        </ul>
                    </li>
                    <li><a class="normaal" href="informatie.php">informatie</a></li>
                    <li>
                        <label for="winkelmand-toggle" class="winkelmand-toggle-label">
                            <span><img src="img/winkel.png" width="40" height="40" style="margin-top: 5px;"></span>
                        </label>
                        <input type="checkbox" id="winkelmand-toggle" class="winkelmand-toggle">
                        <div id="winkelmand">
                            <h1>
                                winkelmand
                            </h1>
                            <?php
                                print_winkelmand();
                            ?>
                            <input type="button" id="betaal-knop" onclick="window.location.href = 'betaal.php'" value="Betaal">
                            <div id="space"></div>
                        </div>
                    </li>

                    <!-- <img src="img/winkel.png" width="40" height="40" style="margin-top: 5px;"> -->
                </ul>
            </nav>
        </div>
        <div id="producten">
            <?php
                print_data("normaal",$_GET["categorie"]);
            ?>
        </div>
    </div>
</body>
</html>