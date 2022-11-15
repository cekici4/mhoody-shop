<?php
$dbname = 'webshop';
$dbuser = 'webshop';
$dbpass = 'passwort123';

try {
    $dblink = new PDO('mysql:host=localhost;dbname=webshop', $dbuser, $dbpass);
    
} catch (PDOException $e){
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit();
}
?>
