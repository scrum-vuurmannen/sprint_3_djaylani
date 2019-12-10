<?php
    include "functions.php";
    session_start();

    if(!isset($_SESSION['winkelmand'][0])){
        header("Location:vuurwerk.php?categorie=allemaal");
    }

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
            <img src="img/logo.png" height="50" width="50">
            <h1>Vuurmannen</h1>
        </div>    
        <div id="nav">
            <nav id="head-nav">
                <ul>
                    <li><a class="normaal" href="index.php">Home</a></li>
                    <li><a class="normaal" href="vuurwerk.php?categorie=allemaal">Vuurwerk</a>
                        <ul>
                            <li><a class="normaal" href="vuurwerk.php?categorie=allemaal">allemaal</a></li>
                            <li><a class="normaal" href="vuurwerk.php?categorie=knal">Knal</a></li>
                            <li><a class="normaal" href="vuurwerk.php?categorie=sier">Sier</a></li>
                            <li><a class="normaal" href="vuurwerk.php?categorie=pakket">pakket</a></li>
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
                </ul>
            </nav>
        </div>
        <div id="betaal">
            <img src="img/logo.png">
            <h1>Vuurmannen</h1>
            <h2>vacature</h2>
            <?php gebruiker();?>
            <?php betaal(); ?>

            <p>
                Hier bij is de betaling af gerond. <br> 
                uw producten zullen zo snel mogelijk verstuurd worden. <br>
                En tot de volgende keer.<br>
            </p>
        </div>
    </div>
</body>
</html>