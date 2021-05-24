<?php 
require('db_connect.php');
function fetchdata($query_string){
    global $db;
    $statement = $db->prepare($query_string);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}
$product_img = ['Acer-Aspire-5.jpg', 'adidas-jacket.jpg', 'adidas-shoe.jpg', 'Airpod-2.jpg', 'app-store.png', 'blank-profile.png', 'buy-1.jpg', 'buy-2.jpg', 'buy-3.jpg', 'Canon-OES-300D.jpg', 'category-1.jpg', 'category-2.jpg', 'category-3.jpg', 'clark-street-mercantile.jpg', 'clothe-store.jpg', 'Dell-inspiron.jpg', 'electronic-store.jpg', 'exclusive.png', 'Fossil-clock.jpg', 'gallery-2.jpg', 'gallery-3.jpg', 'gallery-4.jpg', 'image1.png', 'iPhone-12.jpg', 'LG-smart-TV.jpg', 'logo-coca-cola.png', 'logo-godrej.png', 'logo-oppo.png', 'logo-paypal.png', 'logo-philips.png', 'logo-white.png', 'Macbook-air.jpg', 'Mall-center.jpeg', 'menu.png', "Nhan's photo.jpg", 'Nike-jogger-pant.jpg', 'Panasoic-smart-TV.jpg', 'Plantronics.jpg', 'play-store.png', 'product-1.jpg', 'product-10.jpg', 'product-12.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg', 'product-5.jpg', 'product-6.jpg', 'product-7.jpg', 'Puma-black-shirt.jpg', 'Puma-classic-shirt.jpg', 'Puma-T-shirt.jpg', 'Redmi-note-10.jpg', 'Roadster-classic-clock.jpg', 'Roadster-shoe.jpg', 'Roadster-sport-shoe.jpg', 'simple-logo.jpg', 'Sony-alpha-ILCE.jpg', 'Sport-band.png', 'tech-logo.jpg', 'Tech-store.jpg', 'Thong_photo.jpg', 'X-red-shoe.jpg', 'X-shock.jpg', 'X-training-shoe.jpg', 'X-walking-shoe.jpg'];
$new_products = fetchdata('SELECT * FROM `products` ORDER BY created_time DESC LIMIT 10'); 

$new_stores = fetchdata('SELECT * FROM `stores` ORDER BY created_time DESC LIMIT 10');
// $feature_products = 
// $feature_stores =

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall Website</title>
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
                <img src="images/logo.png" alt="Mall Logo" width="125px" class="logo2">
            </div>
            <div class="nav-text">
                <h1> MALL CENTER</h1>
            </div>
            <div class="nav-links-container">
                <input type="checkbox" id="menu-icon">

                <div class="menu-image">
                    <label for="menu-icon"><img src="images/menu.png" width="20px" alt="Menu Navigation" class="Nav-logo-mini"></label>
                </div>
                
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About_us.html">About Us</a></li>
                    <li><a href="fee_table.html">Fees</a></li>
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="browse_store.html">Browse</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="store-image-center"></div>

    <div class="container">
        

        <!-- Div for new stories -->
        <div class="Heading-container">
            <div class="container-font">
                <h3>New Stores</h3>
            </div>
            <div class = "container_box">
            
                <a href="TechStore.html" class="">
                    <div class="detail-content">
                    
                        <div class="content-img" >
                            <img src="images/electronic-store.jpg" width="187px" alt="electronic-store-image" id = "techstore_img">
                        </div>

                        <div class="content-text">
                            <span>The Feature Tech</span>
                        </div>
                    
                    </div>
                </a>
            
                <a href="MRSimpleStore.html" class="">
                    <div class="detail-content" >
                    
                        <div class="content-img">
                            <img src="images/clothe-store.jpg" width="210px" alt="clothe-store-image" id = "mrsimplestore_img">
                        </div>

                        <div class="content-text">
                            <span>Mr.Simple</span>
                        </div>
                    
                    </div>
                </a>

            </div>
        </div>


        <!-- Div for new product -->
        <div class="Heading-container-1">
            <div class="container-font">
                <h3>New Product</h3>
            </div>

            <div class="inside-content-1" id = "inside-content-1-id">
                <a href="ProductPage.html" class="scroll_product">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="ImageProductTesting/iphone-12-pro-max-1.jpeg" width="160px" alt="Iphone 12 Pro Max">
                        </div>

                        <div class="content-text">
                            <span>Iphone 12 Pro-Max</span>
                            <span>31.900.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <?php foreach($new_products as $new_product) : ?>
                    <a href="ProductPage.html" class="scroll_product">
                        <div class="detail-content">
                    
                            <div class="content-img">
                                <img src="images/<?php echo $product_img[array_rand($product_img)] ?>" width="160px" alt="Iphone 12 Pro Max">
                            </div>

                            <div class="content-text">
                                <span><?php echo $new_product['name'] ?></span>
                                <span><?php echo $new_product['price']?> USD</span>
                            </div>
                        
                        </div>
                    </a>
                <?php endforeach; ?>

                <a href="ProductPage2.html" class="scroll_product">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/adidas-shoe.jpg" width="160px" height="140px" alt="Adidas_Shoe">
                        </div>

                        <div class="content-text">
                            <span>Adidas Shoe</span>
                            <span>1.750.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <a href="ProductPage.html" class="scroll_product">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/Sport-band.png" width="160px" height="140px" alt="Sport_band">
                        </div>

                        <div class="content-text">
                            <span>Sport Band</span>
                            <span>1.990.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <a href="ProductPage2.html" class="scroll_product">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/Macbook-air.jpg" width="140px" alt="Macbook Air">
                        </div>

                        <div class="content-text">
                            <span>Macbook Air</span>
                            <span>27.990.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <a href="ProductPage.html" class="scroll_product">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/Acer-Aspire-5.jpg" width="250px" alt="Acer Aspire Laptop">
                        </div>

                        <div class="content-text">
                            <span>Acer Aspire 5</span>
                            <span>18.690.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <a href="ProductPage2.html" class="scroll_product">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/Airpod-2.jpg" width="140px" alt="Airpod 2 headphone">
                        </div>

                        <div class="content-text">
                            <span>Airpod 2</span>
                            <span>4.990.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>
            </div>
        </div>

        <!-- Div for featured stories -->
        <div class="Heading-container">
            <div class="container-font">
                <h3>Featured Stores</h3>
            </div>

            <div class="inside-content">
                <a href="TechStore.html" class="">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/electronic-store.jpg" width="203px" alt="electronic-store-image">
                        </div>

                        <div class="content-text">
                            <span>The Feature Tech</span>
                        </div>
                    
                    </div>
                </a>
            </div>
        </div>

        <!-- Div for featured products -->
        <div class="Heading-container-2">
            <div class="container-font">
                <h3>Featured Products</h3>
            </div>

            <div class="inside-content-2" id = "inside-content-2-id">
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

                <a href="ProductPage2.html" class="">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/X-shock.jpg" width="120px" alt="X-shock">
                        </div>

                        <div class="content-text">
                            <span>X-Shock</span>
                            <span>100.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <a href="ProductPage.html" class="">
                    <div class="detail-content">
                    
                        <div class="content-img">
                            <img src="images/adidas-jacket.jpg" width="140px" alt="adidas-jacket">
                        </div>

                        <div class="content-text">
                            <span>Adidas Jacket</span>
                            <span>2.050.000 VND</span>
                        </div>
                        
                    
                    </div>
                </a>

                <a href="ProductPage2.html" class="">
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

                <a href="ProductPage2.html" class="">
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
            </div>
        </div>
    </div>

    <footer>
        <div class="nav-bottom">
            <ul>
                <li><a href="copyright.html">Copyright</a></li>
                <li><a href="term_of_service.html">Term of Service</a></li>
                <li><a href="privacy_policy.html">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>
<script src="JavaScript/auto_scroll.js"></script>
<script src="JavaScript/cookie_consent.js"></script>
</body>
</html>
