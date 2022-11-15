<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/header.php');

?>

<head>
    <title> User Login </title>
</head>
<body>
  <form action="/webshop/admin/controller/login_user.php" method="POST">
      <!-- Email input -->
      <div class="form-outline mb-4">
          <input type="email" id="form1Example1" class="form-control" name="email" value="<?php //print_r($_POST) ?>" />
          <label class="form-label" for="form1Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
          <input type="password" id="form1Example2" class="form-control" name="password" value="<?php //print_r($_POST) ?>" />
          <label class="form-label" for="form1Example2">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center"></div>

        <div class="col">
          <!-- Simple link -->
            <a href="/webshop/admin/views/user_register.php">Register Now!</a>
        </div>
      </div>
      <
      <!-- Submit button -->
      <input id="send" type="submit" value="Send"></div>
  </form>
</body>
<?php
        include($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/footer.html');
?>