<?php 
    
    // Set the username and password for first time Sign-up
    if (isset($_POST['sign_up'])){

        // Create variable username and password (including hashing password)
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        // The first if will check that if the user enter full username, password, confirm_password or not!
        if (isset($_POST['username']) && trim($_POST['password']) == '' && isset($_POST['confirm_password'])){
            echo "<script> alert('Please Enter Username, Password and Confirm Password!')</script>";
        } 
        // The second if will check that if the password and confirm password are indentical
        else if ($_POST["password"] == $_POST["confirm_password"]){
            //  Create a text to store user name and password which is seperated by a comma (",") 
            $text = $username . "," . $password;

            // Variable $handle will create a text file named admin_credentials which has the right to write into that text file 'w+'
            $handle = fopen("../../../admin_credentials.txt", 'w+');

            // fwrite will access to that text file and write the username and password
            fwrite($handle, $text);
            // Close the text file and head user to login.php and echo a javascript alert to tell that admin sign-up successfully
            fclose($handle);
            header('Location: ' . 'login.php', true, 302);
            echo "<script> alert('Sign-up Sucessfully!')</script>";
        } else {
            // If password does not match with confirm password the the page will display a message
            echo "<script> alert('Password must match with Confirm Password! Please re-enter')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Install.PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="install_header">
        <h1>This page is only for admin of the website <br>
            If you are not admin, please go back to the MainPage <a href="../index.php">HERE</a>
        </h1>
    </div>
    
    <div class="install_body">
        <form action='' method='POST'> 
            Username : <input type='text' name='username' /> <br>
            Password : <input type='password' name='password' style="margin-left: 10px;" /> <br>
            Comfirm Password: <input type='password' name='confirm_password' /> <br>
            <input type='submit' class="button" name="sign_up" value='Sign-up' style="width: 100px;"/> 
        </form>
    </div>

</body>
</html>