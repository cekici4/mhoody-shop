<?php
/* 
        Erstellt von: Cagri Ekici
        Modul 133 Webshop
        Abgabe Datum: 18.05

        Funktionen:
                - Produkte erstellen (admin/views/add_product)
                - Produkte auslesen (index.php)
                - Benutzer registrieren (admin/views/user_register.php)
                - Login sollte gehen, jedoch funktioniert mein if statement nicht /login_user.php
                - Logout geht :)
                - Produkt fokussieren mit dem Auge Icon (index.php)
                - Warenkorb hinzufügen mit dem Warenkorb Icon (nicht weiter funktionsfähig) cart.php
                - Konto page, wenn eingelogt (nicht weiter funktionsfähig) benutzerkonto.php
                - Contact page (nicht weiter funktionsfähig) contact.php

                
                
                - Controller für:       Produkte erstellen, 
                                        Produkte löschen, 
                                        Produkte auslesen, 
                                        Einkaufswagen hinzufügen, 
                                        Einkaufswagen anzeigen, 
                                        User einloggen, 
                                        User ausloggen, 
                                        User registrieren, 
        
        Muss gefixt werden:             Login, 
                                        Warenkorb (einlesen in den Cart Array = bin dort nicht weitergekommen), 
                                        Kontakt (easy enough), 
                                        User Konto (update, delete),
                                        Add Product nur über URL erreichbar (ohne Passwort schutz),
                                        Bestellformular fehlt

        Generell = unzufrieden, jedoch geht mir das vieeeeeel zu lange :) 
        Für meinen ersten Webshop Prototyp ist es aber nicht schlecht. 
        Gruss Cagri

*/



        include($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/controller/read_product.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/header.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
        
        
	
        if(!isset($_SESSION)) 
        { 
                session_start(); 
        } 
        
	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
 
	//unset quantity
	unset($_SESSION['qty_array']);
?>


<section class="section-products">
        <div class="container">
                <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                                <div class="header">
                                        <h3>Featuredd Product</h3>
                                        <h2>Popular Products</h2>
                                </div>
                        </div>
                </div>
        <div class="row">
<?php
        foreach($products as $product):
       
?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-1" class="single-product">
                                
                                <div class="part-1" style='background: url("img/<?php print $product['link'] ?>") no-repeat center;'>
                                        <?php ($product['old_price'] != '') ? print '<span class="discount">'. round($product['new_price'] / $product['old_price'] * 100, 1) .'% off</span>' : '' ?>
                                        <ul>
                                                <li><a href="/webshop/components/single_product.php?id=<?php echo $product['product_id']; ?>" role="button"><i class="bi bi-eye"></i></a></li>
                                                <li><a href="/webshop/admin/controller/add_cart.php?product_id=
                                                <?php print($product['product_id']); ?>
                                                "><i class="bi bi-cart-fill"></i></a></li>
                                        </ul> 
                                </div>
                        <div class="part-2">
                                <h3 class="product-title"><?php print $product['name'] ?></h3>
                                <?php ($product['old_price'] != '') ? print '<h4 class="product-old-price">'.$product["old_price"].'</h4>' : print ''?>
                                <h4 class="product-price"><?php print $product['new_price'] ?></h4>
                                </div>
                        </div>
                </div>
<?php
        endforeach
?>

</section>
<?php
        require('components/footer.html');
?>