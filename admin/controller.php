<?php
$dbname = 'webshop';
$dbuser = 'webshop';
$dbpass = 'passwort123';

try {
    $dblink = new PDO('mysql:host=localhost;dbname=webshop', $dbuser, $dbpass);
    //$db = new PDO($dsn, $dbuser, $dbpass);
    echo 'Connection Succesfull';
} catch (PDOException $e){
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit();
}

$data = $_POST;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    $name = $_POST['product'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $sql = 'INSERT INTO tbl_product (name, description, image, price) VALUES (?, ?, ?, ?)';
    $statement = $dblink->prepare($sql);
    $statement->execute(array($name, $description, $image, $price));
    Header("Location:./view.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = 'SELECT * from tbl_product';
    $statement = $dblink->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll();
    //print_r($products);
}

if ($_SERVER['REQUEST_METHOD'] === 'INSERT') {
    $sql = 'INSERT INTO tbl_user (username, password, email) VALUES (:username, :password, :email)';
    $statement = $dblink->prepare($sql);
    $statement->execute();



}

?>