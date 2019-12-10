<?php

    function print_winkelmand(){
        $size = sizeof($_SESSION['winkelmand']);
        $totaal = 0;

?>

        <table id='table-winkelmand'>
        <tr><th>Naam</th> <th>prijs</th> <th>aantal</th> <th>totaal</th></tr>
<?php
        foreach ($_SESSION['winkelmand'] as $i=>$x){
            $prijs = $_SESSION['winkelmand'][$i]['prijs'];
            $aantal = $_SESSION['winkelmand'][$i]['aantal'];
            $p_totaal = $prijs * $aantal;
            $totaal+=$p_totaal;
?>
            
            <tr>
                <td class=".table-winkelmand-normaal"><?php echo $_SESSION['winkelmand'][$i]['naam']; ?></td>
                <td class=".table-winkelmand-normaal">€<?php echo $_SESSION['winkelmand'][$i]['prijs']; ?></td>
                <td class=".table-winkelmand-normaal"><?php echo $_SESSION['winkelmand'][$i]['aantal']; ?></td>
                <td class=".table-winkelmand-normaal">€<?php echo $_SESSION['winkelmand'][$i]['totaal']; ?> </td>
                <td class=".table-winkelmand-img"><a href="vuurwerk.php?categorie=<?php echo $_GET['categorie']; ?>&action=remove&product=<?php echo $_SESSION['winkelmand'][$i]['naam']; ?>"><img src="img/close.png"></a></td>
            </tr>
<?php

        }
        if($size == 0){
            echo "<tr><td colspan='5'>winkelmand is leeg.</td></tr>";
        }
?>
            <tr>
                <td colspan="3">Totaal</td>
                <td>€<?php echo $totaal; ?></td>
            </tr>
        </table>

<?php
    }

?>


