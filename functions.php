<?php

    //config
    include "function/config.php";

    //all
    include "function/all/connect.php";
    include "function/all/stop_connect.php";
    include "function/all/stuur_data.php";
    include "function/all/vraag_data.php";

    //shop
    include "function/shop/create_database.php";
    include "function/shop/create_table.php";
    include "function/shop/print.php";
    include "function/shop/add_winkelmand.php";
    include "function/shop/print_winkelmand.php";
    include "function/shop/remove_winkelmand.php";
    include "function/shop/betaal.php";
    include "function/shop/set_data.php";
    include "function/shop/rendum_klant.php";

    //admin
    include "function/admin/admin_print.php";
    include "function/admin/admin_remove.php";
    include "function/admin/admin_data.php";
    include "function/admin/admin_edit_data.php";



?>