<?php 
session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

}

$sql = 'INSERT INTO tbl_users(email, username, password ) VALUES (:username, :email , :password )';
$statement = $dblink->prepare($sql);
$statement->execute(['username' => $username, 'email' => $email, 'password' => $password]);
$user = $statement->fetch();

if (!empty($username)) {
    echo 'Register succesful.';
} else {
    echo 'Register unsuccesful';
}
Header("Location:/webshop/admin/views/user_login.php");


?>