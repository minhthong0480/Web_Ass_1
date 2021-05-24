<?php 
    $content = file_get_contents('../../../admin_credentials.txt');
    
    $small_content = explode(",", $content);
    $username = $small_content[0];
    $password = $small_content[1];
    
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["username"] == $username 
        && password_verify($_POST["password"], $password)){
        
        $_SESSION["username"] = $username;
       
        header('Location: ' . 'index.php', true, 302);
        // echo "<script>location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='login.php' method='POST'> 
    Username : <input type='text' name='username' /> 
    Password : <input type='password' name='password' /> 
    <input type='submit' class="button" name="login" value='login' /> 
<form> 
</body>
</html>