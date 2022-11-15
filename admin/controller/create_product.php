<?php 

if (!empty($_POST)) {
require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');

$sql = 'INSERT INTO tbl_products(name, description, new_price, link) VALUES (:name, :description, :new_price, :link)';
$statement = $dblink->prepare($sql);

    $name = $_POST['name'];
    $description = $_POST['description'];
    $new_price = $_POST['new_price'];
    $link = $_POST['link'];

  $statement->execute([
    'name' => $name,
    'description' => $description,
    'new_price' => $new_price,
    'link' => $link
  ]
  );

  header ('Location: /webshop/admin/views/add_product.php');
  exit;
} else {
    echo 'well';
}
?>