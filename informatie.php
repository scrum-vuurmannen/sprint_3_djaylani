<?php
    include "functions.php";
    session_start();
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
            <h1>Vuurmannen</h1>
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
                </ul>
            </nav>
        </div>
        <div id="producten">
            <img src="img/logo.png">
            <h2>U kunt ons bereiken door:</h2>
            <h3>E-Mail: Vuurmannen@outlook.com</h3>
            <h3>Tel: 06-12345678</h3>
        </div>
    </div>
</body>
</html>