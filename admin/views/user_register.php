<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/header.php');

?>
<head>
    <title> User Login </title>
</head>
<body>
    <h2>Register User</h2>
    <p> Bereits registriert? <a href="/webshop/admin/views/user_login.php">Anmelden!</a></p>
    
      <form  method="POST" action="/webshop/admin/controller/register_user.php">
        
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value=""required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="" required><br><br><br>
        
        <input id="send" type="submit" value="Send"></div>
      </form> 

</body>