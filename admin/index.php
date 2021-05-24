<?php 
session_start();
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
    <?php if (isset($_SESSION["username"])):?>
        <a href="index.php">Dashboard</a>
        <a href="logout.php">Logout</a>
        <a href="edit_copyright.php">Edit Copyright</a>
    <?php endif; ?>
</body>
</html>

<!-- This website and its content is copyright of Red Store. All rights reserved. -->