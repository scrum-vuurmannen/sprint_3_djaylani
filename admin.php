<?php
    include "function/admin_run_clean.php";
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
            <a href="index.php"><img src="img/logo.png" height="50" width="50"></a>
            <h1>Vuurmannen</h1>
        </div>
            <?php 
                if(isset($_GET['screan'])){
                    if($_GET['screan'] == "login"){
                        ?>
                        <div id="login">
                            <form action="admin.php?action=login" method="post">
                                <table>
                                    <tr>
                                        <th>Gebruikernaam</th>
                                        <td><input type="text" name="gebruiker"></td>
                                    </tr>
                                    <tr>
                                        <th>wachtword</th>
                                        <td><input type="password" name="wachtword"></td>
                                    </tr>
                                    <tr class="center"><td colspan='2'><input type="submit" value="login"></td></tr>
                                </table>
                            </form>
                        </div>
                        <?php
                    }else if($_GET['screan'] == "list"){
                        echo '<div id="admin-list">';
                        admin_print();
                        ?>
                        <div class="button">
                            <input type="button" onclick="window.location.href = 'admin.php?screan=add'" value="voeg en product toe">
                            <input type="button"onclick="window.location.href = 'admin.php?screan=login&a=out'" value="log uit">
                        </div>
                        <?php
                        echo '</div>';
                    }else if($_GET['screan'] == "edit"){
                        echo "<div id='edit'>";
                        admin_data("edit",$_GET['product']);
                        echo "</div>";
                    }else if($_GET['screan'] == "add"){
                        echo "<div id='add'>";
                        admin_data("add","add");
                        echo "</div>";
                    }
                }
            ?>
    </div>
</body>