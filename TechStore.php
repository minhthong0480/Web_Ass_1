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
    $product_img = ['Sport-band.png', 'iPhone-12.jpg', 'Dell-inspiron.jpg', 'Panasoic-smart-TV.jpg', 'LG-smart-TV.jpg', 'Redmi-note-10.jpg', 'Plantronics.jpg', 'Sony-alpha-ILCE.jpg', 'Canon-OES-300D.jpg'];
    $product_href = ['ProductPage.html', 'ProductPage2.html'];
    // Fetch the data from database
    $tech_new_products = fetchdata('SELECT * FROM `products` WHERE store_id = 49 ORDER BY `products`.`created_time` DESC LIMIT 5');
    $tech_featured_products = fetchdata('SELECT * FROM `products` WHERE store_id = 49');
?>


<!-- Since this is a TECH STORE. The team decide to pick the store name "BOEING 2" with the category_id = 7 and the store_id = 49 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tech Store</title>
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
                <img src="images/tech-logo.jpg" alt="Tech Logo" width="50px" class="simple-logo">
            </div>
            <div class="nav-text">
                <h1> Boeing 2</h1>
            </div>
            <div class="nav-links-container">
                <input type="checkbox" id="menu-icon">

                <div class="menu-image">
                    <label for="menu-icon"><img src="images/menu.png" width="20px" alt="Menu Navigation" class="Nav-logo-mini"></label>
                </div>
                
                <ul class="nav-links">
                    <li><a href="TechStore.php">Home</a></li>
                    <li><a href="About_us.html">About Us</a></li>
                    <li><a href="browse_product_tech.html">Product</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="second-shop-container">
        <div class="store-image-2">
            <div class="slogun">
                <h3>YOU ARE ONLY ONE STEP TO THE FUTURE.</h3>
            </div>
        </div>

        <div class="store-all-product">

            <!-- Div for New products -->
            <div class="store-container-3">
                <div class="container-font">
                    <h3>New Products</h3>
                </div>
    
                <div class="inside-content">
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/iPhone-12.jpg" width="160px" alt="iPhone12-img">
                            </div>
    
                            <div class="content-text">
                                <span>iPhone 12</span>
                                <span>26.990.000 VND</span>
                            </div>

                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Dell-inspiron.jpg" width="160px" alt="Dell-laptop-image">
                            </div>
    
                            <div class="content-text">
                                <span>Dell Inspiron</span>
                                <span>29.990.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Panasoic-smart-TV.jpg" width="160px" alt="Panasoic-smart-TV-img">
                            </div>
    
                            <div class="content-text">
                                <span>Panasonic smart TV</span>
                                <span>6.400.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/LG-smart-TV.jpg" width="160px" alt="LG-tv-image">
                            </div>
    
                            <div class="content-text">
                                <span>LG Smart TV</span>
                                <span>6.900.000 VND</span>
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
            <div class="store-container-4">
                <div class="container-font">
                    <h3>Featured Products</h3>
                </div>
    
                <div class="inside-content">
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Redmi-note-10.jpg" width="160px" alt="Remi-note-10-img">
                            </div>
    
                            <div class="content-text">
                                <span>Redmi Note 10</span>
                                <span>4.690.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Plantronics.jpg" width="160px" alt="Plantronic-image">
                            </div>
    
                            <div class="content-text">
                                <span>Plantronic ML15</span>
                                <span>475.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Sony-alpha-ILCE.jpg" width="160px" alt="Sony-camera-image">
                            </div>
    
                            <div class="content-text">
                                <span>Sony Alpha ILCE</span>
                                <span>20.490.000 VND</span>
                            </div>
                            
                        
                        </div>
                    </a>
    
                    <a href="ProductPage.html" class="">
                        <div class="detail-content">
                        
                            <div class="content-img">
                                <img src="images/Canon-OES-300D.jpg" width="120px" alt="Canon-camera-image">
                            </div>
    
                            <div class="content-text">
                                <span>Canon OES 300D</span>
                                <span>8.800.000 VND</span>
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
