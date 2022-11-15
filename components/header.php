<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
        <head>
                <title></title>
                <!-- CSS only -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="/webshop/components/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
                
                <style>
                        .discount {
                                position: absolute;
                                top: 15px;
                                left: 20px;
                                color: #ffffff;
                                background-color: #fe302f;
                                padding: 2px 8px;
                                text-transform: uppercase;
                                font-size: 0.85rem;
                        }
                </style>
        </head>
        
        <body>
                <header class="p-3 bg-dark text-white">
                <div class="container">
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                                </a>

                                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="/webshop/index.php" class="nav-link px-2 text-secondary">Home</a></li>
                                <li><a href="/webshop/components/benutzerkonto.php" class="nav-link px-2 text-secondary">Konto</a></li>
                                <li><a href="/webshop/components/contact.php" class="nav-link px-2 text-secondary">Contact</a></li>
                                <li></li>
                                <li></li>
                                </ul>

                                <div class="text-end">
                                  			<!-- Added Condition to change button based on Login Status -->
                                
                                
                                
                                
                                
                                <?php 
                                        if (array_key_exists('email', $_SESSION)) {
                                                print '<a href="/webshop/admin/controller/logout_user.php"><button type="button" class="btn btn-warning">Logout</button></a>';
                                                
                                        } else {
                                                print '<a href="/webshop/admin/views/user_login.php"><button type="button" class="btn btn-warning">Login</button></a>';
                                        }
                                        
                                        
                                         //var_dump($_SESSION); 
                                ?>
                                <a href="/webshop/components/cart.php"> <button type="button" class="btn btn-warning bi bi-cart2"></button></a>


                                
                                </div>
                        </div>
                </div>
                </header>