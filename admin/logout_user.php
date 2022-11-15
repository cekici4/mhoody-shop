<?php 
    session_start();

    //require($_SERVER['DOCUMENT_ROOT'] . '/admin/database.php');
    //print_r($_POST);

    session_destroy();
    Header("Location:/benutzerkonto.php");


?>