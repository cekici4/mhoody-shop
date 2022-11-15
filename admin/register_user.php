<?php 
session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

}

$sql = 'INSERT INTO tbl_users(email, username, password ) VALUES (?,?,?)';
$statement = $dblink->prepare($sql);
$statement->execute(array($email, $username , $password));
$user = $statement->fetch();

if (!empty($username)) {
    echo 'Register succesful.';
} else {
    echo 'Register unsuccesful';
}
Header("Location:/user_login.php");


?>