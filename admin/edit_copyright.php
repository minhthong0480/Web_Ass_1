<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['copy_right'])){
    
    $handle = fopen("../copyright.html", 'w+');
    fwrite($handle, $_POST['html_content']);
    fclose($handle);
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
    <h1>Edit Copy right </h1>
    <form action="" method="POST">
        <textarea name="html_content" cols="110" rows="100" >
            <?php
                
                echo file_get_contents('../copyright.html');
                
            ?>

        </textarea>
        <button type="submit" name="copy_right">Save CoppyRight</button>

    </form>
</body>
</html>