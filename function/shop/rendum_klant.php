<?php

    function gebruiker(){
        $mensen = array(
            array( //mijsje
                array("Anna de Jong","AnnadeJong@outlook.com","wilem straat 16"),
                array("Sophie Jansen","SophieJansen@outlook.com","janklaas staat 20"),
                array("Evi de Vries", "EvideVries@outlook.com","wilem straat 20A"),
                array("Eva van den Berg","EvavandenBerg@outlook.com", "pieter laan 10"),
                array("Lisa van Dijk", "LisavanDijk@outlook.com", "jorg laan 20")
            ),
            array( //jongen
                array("Daan Bakker","DaanBakker@outlook.com","Sligtestraat 13"),
                array("Lucas Janssen", "LucasJanssen@outlook.com", "Aadorp 17"),
                array("Milan Visser", "MilanVisser@outlook.com", "Achter de Molen 5"),
                array("Luuk Smit", "LuukSmit@outlook.com", "Berenstaat 32"),
                array("Liam Leeson", "LiamLeeson@outlook.com", "Border 54")
            )
        );

        $geslacht = rand(0,1);
        $wie = rand(0,4);


        echo "<p id='gegevens'> naam: " . $mensen[$geslacht][$wie][0] . "<br>";
        echo "E-mail: " . $mensen[$geslacht][$wie][1] . "<br>";
        echo "Adres: " . $mensen[$geslacht][$wie][2] . "</p>";

    }

?>