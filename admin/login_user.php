<?php 
    session_start();

    require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
    //print_r($_POST);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //echo "ICH BIN EIN POST";

        $email = $_POST['email'];
        $password = $_POST['password'];

        
    }

    $sql = 'SELECT * FROM tbl_users WHERE email = ? AND password = ?';
    $statement = $dblink->prepare($sql);
    $statement->execute(array($email, $password));
    $user = $statement->fetch();    
    

    if (empty($user)) {
        //echo 'Login unsuccesful.';
        
    } else {
        //echo 'Login succesful';
        $_SESSION['email'] = $user['email'];
    }
    
    //print_r($_SESSION);
    
    Header("Location:/webshop/components/benutzerkonto.php");


?>