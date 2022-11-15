<?php require('controller.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<h1>Produkte</h1>
<h2>Neues Produkt erfassen</h2>

<div class="input">
      <form  method="post" action="./controller.php">
        <input type="text" id="product" name="product" placeholder="Product"required><br>
        <input type="text" id="description" name="description" placeholder="Description" required><br>
        <input type="text" id="image" name="image" placeholder="Image Link"> <br>
        <input type="text" id="price" name="price" placeholder="Price"> <br>
        <input type="submit" value="Submit">
      </form> 
    </div>
    <h2>Erfasste Produkte</h2>
    <ul>
        <?php foreach($products as $product): ?>
            <li><?php print($product['name'] . ' - ' . $product['description'] . ' - ' . $product['price']); ?>
            </li>
        <?php endforeach ?>
    </ul>
    <?php //print_r($_SERVER); ?>
</body>
</html>