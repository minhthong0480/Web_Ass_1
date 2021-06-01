<?php
    include("config_db.php");
    session_start();
    
            
    if (isset($_POST['login'])) {
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
        
        $myusername = mysqli_escape_string($conn,$_POST['username']);

        $mypassword = mysqli_escape_string($conn,$_POST['password']);
        $hash = password_hash($mypassword, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM users WHERE usersPhone = '$myusername' or usersEmail = '$myusername' and usersPass = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // $row = mysqli_fetch_assoc($result)
        
        $count = mysqli_num_rows($result);

        if($count == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['login_user'] = $row["usersPhone"];
            }
            header("location: profile.php");
         }
         
        }
        $status = 'Your Login information is invalid';
    }

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
                    <li><a href="login_user.php">My Account</a></li>
                    <li><a href="browse_store.html">Browse</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="login">
        <h2>Log In Here</h2>
        <div class="form_box">
            <form method="POST" action = "">
                <div class="username">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Phone or Email">
                </div>
                <div class="password">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password">
                    
                </div>
                <div class="login_button">
                        
                <input type="submit" name = "login" value="Log In"></a>
                        
                </div>
                <div>
                    <a href="forgot_pass.html" class="link_to_another_page">Forgot Password?</a>
                </div>
                <div class="signup">
                    <a href="register.html" class="link_to_another_page">Register Account</a>
                </div>
            </form>
        </div>  
<?php
if(isset($status)){
    echo "<h3 class=\"error\">$status</h3>";
}
?>
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
<script src="JavaScript/cookie_consent.js" async></script>
</body>
</html>
