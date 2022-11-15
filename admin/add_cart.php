
<?php
/*
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {    

    
    print_r($_GET);
    $product = $_GET;

    if (!array_key_exists('cart', $_SESSION)) {
        $_SESSION['cart'] = array();
    }
    if (count($product)) {
        array_push($_SESSION['cart'], $product);

    }
    

    print_r($_SESSION['cart']);

}

*/
?>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/read_product.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
	
	session_start();
 
	//check if product is already in the cart
	if(!in_array($_GET['product_id'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['product_id']);
		$_SESSION['message'] = 'Product added to cart';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
	}
 
	header('location: /webshop/index.php');

?>