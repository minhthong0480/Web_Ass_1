<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['thong_form'])){
        echo $_FILES['thong_photo']['tmp_name'];
        move_uploaded_file($_FILES['thong_photo']['tmp_name'], '../images/team_photo/thong_photo.jpg');
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
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Edit Thong Photo</h1>
        <input type="file" name="thong_photo">
        <button type="submit" name="thong_form">Save</button>
    </form>
    <form action=""></form>
    <form action=""></form>
</body>
</html>