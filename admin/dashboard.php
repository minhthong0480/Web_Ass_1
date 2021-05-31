

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" href="admin.css">
    </head>

    <body>
        <h1>Welcome to Dashboard</h1>

        <?php 
        // Session start
        session_start();

        // Check if the username is valid or not
        if (isset($_SESSION["username"])){
            // If username is valid then the dashboard content will be display
            echo '<a href="edit_copyright.php" class="dashboard_mini_container"><div>Edit Copyright</div></a>';
            echo '<a href="edit_tos.php" class="dashboard_mini_container"><div>Edit ToS</div></a>';
            echo '<a href="edit_privacypolicy.php" class="dashboard_mini_container"><div>Edit Privacy Policy</div></a>';
            echo '<a href="edit_teamphoto.php" class="dashboard_mini_container"><div>Edit Team Photo</div></a>';
            echo '<a href="login.php" class="dashboard_mini_container"><div>Logout</div></a>';
        
        } else {
            // Else the website will head back to login section to require user login
            header('Location: ' . 'login.php', true, 302);
        }

        ?>

    </body>
</html>

<!-- This website and its content is copyright of Red Store. All rights reserved. -->