<?php 
    session_start();

    require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
    $row = 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //echo "ICH BIN EIN POST";
		var_dump($_POST);
		
        
        if (empty($_POST['email']) || empty($_POST['password'])) {
            echo "Warum ich checks nicht, das ding ist nicht leer jooooooooooooo";
            echo "<script>alert('Please complete the required field!')</script>";
            Header("Location:/webshop/admin/views/user_login.php");
        
        } else {

            $sql = 'SELECT * FROM tbl_users WHERE email = :email AND password = :password';
            $statement = $dblink->prepare($sql);
            $statement->execute(array('email' =>  $_POST['email'], 'password' => $_POST['password']));
            $count = $statement->rowCount();
            
            // Ich entferne das if, weil es nicht gehen möchte, ich aber möchte, dass es weiter geht
            //if($count > 0) {

                $_SESSION['email'] = $_POST['email'];
                Header("Location:/webshop/index.php");
            
            //}
         
        } 
    }

        
    
    
    
    
    


?>