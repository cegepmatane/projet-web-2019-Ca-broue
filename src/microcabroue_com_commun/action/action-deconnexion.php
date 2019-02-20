<?php


if(isset($_POST["action-deconnexion"]) && $_POST["action-deconnexion"] == "deconnexion"){
    session_start();
    session_destroy();
    header('Location: boutique'); 
}
