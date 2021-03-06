<?php 
    require('db_connect.php');

    // function to fetch the data from the database
    function fetchdata($query_string){
        global $db;
        $statement = $db->prepare($query_string);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    // An array of string to select the photo randomly for the product sections
    $product_img = ['Sport-band.png', 'Fossil-clock.jpg', 'Puma-T-shirt.jpg', 'Roadster-classic-clock.jpg', 'Fossil-clock.jpg', 'Roadster-shoe.jpg', 'adidas-jacket.jpg', 'adidas-shoe.jpg', 'X-shock.jpg'];
    $product_href = ['ProductPage.html', 'ProductPage2.html'];
    // Fetch the data from database
    $tech_new_products = fetchdata('SELECT * FROM `products` WHERE store_id = 21 ORDER BY `created_time` DESC LIMIT 5');
    $tech_featured_products = fetchdata('SELECT * FROM `products` WHERE store_id = 21');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Simple Clothe Store</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    <div id="cookie">
        <div>I use cookies</div>
        <div>My website uses cookies necessary for its basic funtions. By continuing using, you consent to my uses of cookies and other technologies.</div>
        <button id="agreement">I understand</button>
        <a href="https://gdpr-info.eu/">
            Learn more
       </a>
    </div>
    
    <header>
        <nav>
            <div class="nav-logo">
                <img src="images/simple-logo.jpg" alt="Simple Store Logo" width="70px" class="simple-logo">
            </div>
            <div class="nav-text">
                <h1>AMAZON.COM 2</h1>
            </div>
            <div class="nav-links-container">
                <input type="checkbox" id="menu-icon">

                <div class="menu-image">
                    <label for="menu-icon"><img src="images/menu.png" width="20px" alt="Menu Navigation" class="Nav-logo-mini"></label>
                </div>
                
                <ul class="nav-links">
                    <li><a href="MRSimpleStore.php">Home</a></li>
                    <li><a href="About_us.html">About Us</a></li>
                    <li><a href="browse_product_clothe.html">Product</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="first-shop-container">
        <div class="store-image">
            <div class="slogun">
                <h3>The Simplest way to change YOUR STYLE!</h3>
            </div>
        </div>

        <div class="store-all-product">

            <!-- Div for New products -->
            <div class="store-container-1">
                <div class="container-font">
                    <h3>New Products</h3>
                </div>
    
                <div class="inside-content">
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Puma-T-shirt.jpg" width="160px" alt="Puma-T-shirt-img">
                            </div>
    
                            <div class="content-text">
                                <span>Puma T-Shirt</span>
                                <span>350.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Roadster-classic-clock.jpg" width="120px" alt="Roadster-classic-clock-image">
                            </div>
    
                            <div class="content-text">
                                <span>Roadster Clock</span>
                                <span>1.550.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Fossil-clock.jpg" width="120px" alt="Fossil-clock-image">
                            </div>
    
                            <div class="content-text">
                                <span>Fossil Clock</span>
                                <span>5.400.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Roadster-shoe.jpg" width="120px" alt="Roadster-shoe-image">
                            </div>
    
                            <div class="content-text">
                                <span>Roadster-shoe</span>
                                <span>2.100.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>

                    <!-- PHP for displaying 5 new products due to created time-->
                    <?php foreach($tech_new_products as $tech_new_product) : ?>
                        <a href="<?php echo $product_href[array_rand($product_href)] ?>" class="scroll_product">
                            <div class="detail-content">
                        
                                <div class="content-img">
                                    <img src="images/<?php echo $product_img[array_rand($product_img)] ?>" width="160px" alt="Product-Image">
                                </div>

                                <div class="content-text">
                                    <span><?php echo $tech_new_product['name']?></span>
                                    <span><?php echo $tech_new_product['price']?> USD</span>
                                </div>
                            
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
    
            <!-- Div for featured products -->
            <div class="store-container-2">
                <div class="container-font">
                    <h3>Featured Products</h3>
                </div>
    
                <div class="inside-content">
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/adidas-jacket.jpg" width="145px" alt="Adidas-jacket-img">
                            </div>
    
                            <div class="content-text">
                                <span>Adidas Jacket</span>
                                <span>2.050.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/adidas-shoe.jpg" width="145px" alt="Adidas-shoe-image">
                            </div>
    
                            <div class="content-text">
                                <span>Adidas shoe</span>
                                <span>1.750.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/X-shock.jpg" width="120px" alt="X-shock-image">
                            </div>
    
                            <div class="content-text">
                                <span>X-shock</span>
                                <span>100.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Roadster-sport-shoe.jpg" width="120px" alt="Roadster-sport-shoe-image">
                            </div>
    
                            <div class="content-text">
                                <span>Roadster sport shoe</span>
                                <span>2.700.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
                    
                    <!-- PHP for displaying featured products of the stores-->
                    <?php foreach($tech_featured_products as $tech_featured_product) : ?>
                        <a href="<?php echo $product_href[array_rand($product_href)] ?>" class="scroll_product">
                            <div class="detail-content">
                        
                                <div class="content-img">
                                    <img src="images/<?php echo $product_img[array_rand($product_img)] ?>" width="160px" alt="Product-Image">
                                </div>

                                <div class="content-text">
                                    <span><?php echo $tech_featured_product['name']?></span>
                                    <span><?php echo $tech_featured_product['price']?> USD</span>
                                </div>
                            
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>    
<script src="JavaScript/cookie_consent.js"></script>

    <footer>
        <div class="nav-bottom">
            <ul>
                <li><a href="copyright.html">Copyright</a></li>
                <li><a href="term_of_service.html">Term of Service</a></li>
                <li><a href="privacy_policy.html">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>
</body>


</html>
