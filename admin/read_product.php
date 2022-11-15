<?php

require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
 
 // Read all products
 if ($_SERVER['REQUEST_METHOD'] === 'GET') {
 
 $sql = 'SELECT * from tbl_products';
 $statement = $dblink->prepare($sql);
 $statement->execute();
 $products = $statement->fetchAll();
 }
 



?>