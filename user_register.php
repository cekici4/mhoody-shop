<?php 
include 'header.html';
include 'navbar.html';
?>
<head>
    <title> User Login </title>
</head>
<body>
    <h2>Register User</h2>
    <p> Bereits registriert? <a href="user_login.php">Anmelden!</a></p>
    
      <form  method="post" action="/webshop/admin/register_user.php">
        
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value=""required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="" required><br><br><br>
        
        <input type="submit" value="Submit"><br>
      </form> 

</body>