<?php 
    session_start();
    unset($_SESSION["nome"]);
    session_destroy();
    header("location: views/login.php");
    exit;
?>