<?php 
    // Variable $content to get the content from the admin_credentials text file
    $content = file_get_contents('../../../admin_credentials.txt');
    // $small_content will seperate the username and password by a comma
    $small_content = explode(",", $content);
    // $username and $password will store all string username and password from the text
    $username = $small_content[0];
    $password = $small_content[1];

    session_start();

    // Check if user enter username and password fully
    if (isset($_POST['username']) && isset($_POST['password'])){
        echo "<script> alert('Wrong username or password, or missing input field!') </script>";
    }
    // Check if the username and the password are indentical with $username and $password variable
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["username"] == $username 
        && password_verify($_POST["password"], $password)){
        
        $_SESSION["username"] = $username;
        header('Location: ' . 'dashboard.php', true, 302);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="login_header">
        <h1>
            Welcome to Login Page!
        </h1>
    </div>

    <form action='login.php' method='POST'> 
        Username : <input type='text' name='username' /> <br>
        Password : <input type='password' name='password' /> <br>
        <input type='submit' class="button" name="login" value='Login' style="width: 100px; height: 30px;" /> 
    </form> 
   
</body>
</html>