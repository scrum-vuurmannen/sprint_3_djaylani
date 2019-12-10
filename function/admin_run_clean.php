<?php

    include "functions.php";
    session_start();


    if($_GET['screan'] == "login"){
        if(isset($_GET['a']) && $_GET['a'] == "out"){
            unset($_SESSION['admin']);
            header("location:admin.php?screan=login");
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == "login"){
        if($_POST['gebruiker'] == "admin"){
            if($_POST['wachtword'] == "admin"){
                $_SESSION['admin'] = $_POST['gebruiker'];
                header("location:admin.php?screan=list");
            }
        }
    }

    if(isset($_GET['screan']) && $_GET['screan'] == "list"){
        if(isset($_GET['action']) && $_GET['action'] == "remove"){
            if(isset($_GET['product'])){
                remove_data($_GET['product']);
            }
        }
    }
    if(isset($_GET['action']) && $_GET['action'] == "edit"){
        if(isset($_POST['naam_edit']) && isset($_POST['prijs']) && isset($_POST['vooraad']) && isset($_POST['categorie']) && isset($_POST['url_afbeelding'])){
            admin_edit_data($_GET['p'], $_POST['naam_edit'], $_POST['prijs'], $_POST['vooraad'], $_POST['categorie'], $_POST['url_afbeelding']);
            unset($_POST['naam_edit']);
            unset($_POST['prijs']);
            unset($_POST['vooraad']);
            unset($_POST['categorie']);
            unset($_POST['url_afbeelding']);
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == "add"){
        if(isset($_POST['naam_add']) && isset($_POST['prijs']) && isset($_POST['vooraad']) && isset($_POST['categorie']) && isset($_POST['url_afbeelding'])){
            stuur_data($_POST['naam_add'], $_POST['prijs'], $_POST['vooraad'], $_POST['categorie'], $_POST['url_afbeelding']);
            unset($_POST['naam_add']);
            unset($_POST['prijs']);
            unset($_POST['vooraad']);
            unset($_POST['categorie']);
            unset($_POST['url_afbeelding']);
            header("location:admin.php?screan=list");
        }
    }

?>