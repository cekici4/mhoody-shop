<?php
//
session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET')
    $email = $_SESSION['email'];

    $sql = 'SELECT from tbl_users WHERE email = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($email));
    $user = $statement->fetch();
    
?>