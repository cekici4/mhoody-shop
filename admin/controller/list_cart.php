<?php
session_start();

if (array_key_exists('cart', $_SESSION)) {
    $products = $_SESSION['cart'];
}else {
    $products = array();
}

?>