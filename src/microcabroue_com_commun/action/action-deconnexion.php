<?php


if(isset($_POST["action-deconnexion"]) && $_POST["action-deconnexion"] == "deconnexion"){
    session_start();
    $_SESSION['pseudo'] = null;
    $_SESSION['id'] = null;
    $_SESSION['isAdmin'] = null;
    header('Location: boutique'); 
}
