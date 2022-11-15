<?php
	session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/header.php');
  //gott helfe mir
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Shopping Cart using Session in PHP</title>
	<link rel="stylesheet" type="text/css" href="/webshop/bootstrap/bootstrap.min.css">
</head>
<body>
	<h1 class="page-header text-center">Cart Details</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
			<form method="POST" action="save_cart.php">
			<table class="table table-bordered table-striped">
				<thead>
					<th></th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'webshop', 'passwort123', 'webshop');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT * FROM tbl_products WHERE products_id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
						
            //if($result = $mysqli->query($query)){
							  //while($row = $query->fetch_assoc()){
								?>
								<tr>
                <td>
										<a href="/webshop/delete_item.php?id=<?php echo $row['product_id']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
									</td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo number_format($row['new_price'], 2); ?></td>
									<input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
									<td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
									<td><?php echo number_format($_SESSION['qty_array'][$index]*$row['new_price'], 2); ?></td>
									<?php $total += $_SESSION['qty_array'][$index]*$row['new_price']; ?>
								</tr>
								<?php
								$index ++;
							}
						//}
						else{
							?>
							<tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}
          //}
					?>
					<tr>
						<td colspan="4" align="right"><b>Total</b></td>
						<td><b><?php echo number_format($total, 2); ?></b></td>
					</tr>
				</tbody>
			</table>
			<a href="/webshop/index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
			<button type="submit" class="btn btn-success" name="save">Save Changes</button>
			<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear Cart</a>
			<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>