
<?php require($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/controller/read_product.php'); ?>
<!DOCTYPE html>

<html>
<head>
<title>Create Product</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="reset.css" />
<link rel="stylesheet" href="style.css" />

</head>

<body>

<!--- Add blog post ---> 

<div class="add_form">
    <form id="create_product" method="POST" action="/webshop/admin/controller/create_product.php">
        <div class="form-group">
            <label for="productName">Name</label>
            <input class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" id="description" name="description">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" id="new_price" name="new_price">
        </div>

        <div class="form-group">
            <label for="link">Image-Link</label>
            <input class="form-control" id="link" name="link">
        </div>
        
        <input id="send" type="submit" value="Send"></div>
</form>

<h2>Erfasste Produkte</h2>
    <ul>
        <?php foreach($products as $product): ?>
            <li><?php print($product['name'] . ' - ' . $product['description'] . ' - ' . $product['new_price']); ?>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>