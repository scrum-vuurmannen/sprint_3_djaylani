<?php

    function set_data(){
        $data = vraag_data("normaal","allemaal");

        if(sizeof($data) <= 0){
            //knal
            stuur_data("Kanonslag easypack", 1.79,300,"knal","img/product/Kanonslag.png");
            stuur_data("Thunderstrike", 4.50,300,"knal","img/product/Thunderstrike.png");
            stuur_data("Baby dragon", 19.95,300,"knal","img/product/Baby_dragon.png");
            //sier
            stuur_data("Lightyear", 29.99,250,"sier","img/product/Lightyear.png");
            stuur_data("Slam city", 129.50,100,"sier","img/product/Slam_city.png");
            stuur_data("Twin burst", 9.99,300,"sier","img/product/Twin_burst.png");
            //pakket
            stuur_data("Gold",45.00,300,"pakket","img/product/Gold.png");
            stuur_data("Vuurwerkmeter",24.95,200,"pakket","img/product/Vuurwerkmeter.png");
            stuur_data("Mega deal",69.95,100,"pakket","img/product/Mega_deal.png");
        }

    }

?>