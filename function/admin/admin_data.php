<?php

    function admin_data($voorm, $naam){
        if($voorm == "edit"){
            $data = vraag_data("winkelmand", $naam);
            ?>
                <h1>Verander: <?php echo $_GET['product']; ?></h1>
                <form id="edit-form" action="admin.php?screan=edit&action=edit&p=<?php echo $data[0]['naam']; ?>" method="post">
                    <table>
                        <tr>
                            <th>Naam:</th>
                            <td><input type="text" name="naam_edit" value="<?php echo $data[0]['naam']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Prijs:</th>
                            <td><input type="text" name="prijs" value="<?php echo $data[0]['prijs']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Vooraad:</th>
                            <td><input type="text" name="vooraad" value="<?php echo $data[0]['vooraad']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Categorie:</th>
                            <td><input type="text" name="categorie" value="<?php echo $data[0]['categorieen']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Url_afbeelding:</th>
                            <td><input type="text" name="url_afbeelding" value="<?php echo $data[0]['url_afbeelding']; ?>"></td>
                        </tr>
                        <tr><td colspan='2'><input type="submit" id="edit-sub" value="verander"></td></tr>
                    </table>
                </form>
            <?php

        }else if($voorm == "add"){
            ?>
                <h1>Voeg Toe</h1>
                <form id="edit-form" action="admin.php?screan=edit&action=add" method="post">
                    <table>
                        <tr>
                            <th>Naam:</th>
                            <td><input type="text" name="naam_add"></td>
                        </tr>
                        <tr>
                            <th>Prijs:</th>
                            <td><input type="text" name="prijs"></td>
                        </tr>
                        <tr>
                            <th>Vooraad:</th>
                            <td><input type="text" name="vooraad"></td>
                        </tr>
                        <tr>
                            <th>Categorie:</th>
                            <td><input type="text" name="categorie"></td>
                        </tr>
                        <tr>
                            <th>Url_afbeelding:</th>
                            <td><input type="text" name="url_afbeelding"></td>
                        </tr>
                        <tr class="center"><td colspan='2'><input type="submit" id="edit-sub" value="voeg toe"></td></tr>
                    </table>    
                </form>
            <?php
        }
    }

?>