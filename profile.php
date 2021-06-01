<?php
session_start();
include('config_db.php');
if(!isset($_SESSION['login_user']))
    header('Location: login_user.php');

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
                    <li><a href="index.php">Home</a></li>
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
    
    <div id="profile">
        <div class="title_profile">Your Profile</div>
        <div class="avatar_card">
            <img class="profile-pic" src="images/blank-profile.png" alt="profile_picture">
        </div>
        <div class="row">
            <div class="user_profile">
                <h4>Username</h4>
            </div>
            <div class="user_infor">
                J.Smith
            </div>
        </div>
        
        <div class="row">
            <div class="fullname_profile">
                <h4>First Name</h4>
            </div>
            <div class="fullname_infor">
            <p type="text" id = "fname_infor"></p>
            </div>
            <div class="fullname_profile">
                <h4>Last Name</h4>
            </div>
            <div class="fullname_infor">
            <p type="text" id = "lname_infor"></p>
            </div>
        </div>

        <div class="row">
            <div class="birthday_profile">
                <h4>Date of Birth</h4>
            </div>
            <div>
                <input type="text" placeholder="Day" id="date_of_birth">
                <select name="months" id="month_of_birth">
                    <option value="selected">Month</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
                <input type="text" placeholder="Year" id="year_of_birth">
            </div>
        </div>
        
        <div class="row">
            <div class="email_profile">
                <h4>Email</h4>
            </div>
            <div class="email_infor">
            <p type="text" id = "emails_infor"></p>
            </div>
        </div>
        
        <div class="row">
            <div class="phone_profile">
                <h4>Phone</h4>
            </div>
            <div class="phone_infor" >
            <p type="text" id = "phoneNum"></p>
            </div>
        </div>
        
        <div class="row">
            <div class="address_profile">
                <h4>Address</h4>
            </div>
            <div class="address_infor">
            <p type="text" id = "address_infor"></p>
            </div>
            <a href="logout_user.php"><button name="signout" id="signout_button">Sign Out</button></a>
            
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
<script src="JavaScript/cookie_consent.js"></script>
</body>
</html>
<?php
// session_start();
include('config_db.php');
$sql =  "Select * from users where usersPhone=" . $_SESSION['login_user'];
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result)) {
        echo '<script type="text/javascript">' .
        'document.getElementById("phoneNum").innerHTML = ' . '"' . $row["usersPhone"] . '"' . ';' .
        '</script>';

        echo '<script type="text/javascript">' .
        'document.getElementById("emails_infor").innerHTML = ' . '"' . $row["usersEmail"] . '"' . ';' .
        '</script>';

        echo '<script type="text/javascript">' .
        'document.getElementById("fname_infor").innerHTML = ' . '"' . $row["usersFirstname"] . '"' . ';' .
        '</script>';

        echo '<script type="text/javascript">' .
        'document.getElementById("lname_infor").innerHTML = ' . '"' . $row["usersLastname"] . '"' . ';' .
        '</script>';

        echo '<script type="text/javascript">' .
        'document.getElementById("address_infor").innerHTML = ' . '"' . $row["usersAddress"] . '"' . ';' .
        '</script>';
    }       
}
?>
