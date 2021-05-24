<?php 

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $text = $username . "," . $password;
        $handle = fopen("../../../admin_credentials.txt", 'w+');

        fwrite($handle, $text);
        fclose($handle);
        header('Location: ' . 'login.php', true, 302);
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
    <form action='' method='POST'> 
    Username : <input type='text' name='username' /> 
    Password : <input type='password' name='password' /> 
    <input type='submit' class="button" name="login" value='login' /> 
    
    <!-- Alert user signed up sucessfully -->
    <!--  -->
</body>
</html>