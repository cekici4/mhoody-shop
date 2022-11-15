<?php 
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/header.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/controller/read_product.php');
    
    
    
    
    $product_id = $_GET['id'];
    
    $sql = "SELECT * from tbl_products WHERE product_id = '$product_id'";
    $statement = $dblink->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    
    
    
    foreach ($products as $product) {
        if (isset($product['product_id'])) {
            $product_name = $product['name'];
            $product_desc = $product['description'];
            $product_price = $product['new_price'];
            $product_link = $product['link'];
            
        } else {
            echo "what the hell";
        }
    }

 

?>

<div class="row mt-3">
            <div class="col-md-5">
                <img src="/webshop/img/<?php echo $product_link; ?>">
            </div>
            <div class="col-md-7">
                <h1><?php echo $product_name; ?></h1>
                <p><?php echo $product_desc;?></p>
                <h4>$<?php echo $product_price;?></h4>
                
                <form class="form-inline" method="POST">
                    <div class="form-group mb-2">
                        <input type="number" name="product_qty" id="productQty" class="form-control" placeholder="Quantity" min="1" max="1000" value="1">
                        <input type="hidden" name="product_id" value="<?php ?>">
                    </div>
                    <div class="form-group mb-2 ml-2">
                        <button type="submit" class="btn btn-primary" name="add_to_cart" value="add to cart">Add to Cart</button>
                    </div>
                </form>
                
            </div>
        </div>
        
        </div>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/footer.html'); ?>
