<?php 
    // Edit Nhan Photo
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['thong_form'])){
        echo $_FILES['thong_photo']['tmp_name'];
        // Replace the orignal photo by the new one
        move_uploaded_file($_FILES['thong_photo']['tmp_name'], '../images/team_photo/thong_photo.jpg');
        echo "<script> alert('Save Thong's photo successfully!') </script>";
    }

    // Edit Van Photo
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['van_form'])){
        echo $_FILES['van_photo']['tmp_name'];
        // Replace the orignal photo by the new one
        move_uploaded_file($_FILES['van_photo']['tmp_name'], '../images/team_photo/van_photo.jpg');
        echo "<script> alert('Save Van's photo  successfully!') </script>";
    }

    // Edit Nhan Photo
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nhan_form'])){
        echo $_FILES['nhan_photo']['tmp_name'];
        // Replace the orignal photo by the new one
        move_uploaded_file($_FILES['nhan_photo']['tmp_name'], '../images/team_photo/nhan_photo.jpg');
        echo "<script> alert('Save Nhan's photo  successfully!') </script>";
    }

    // Check the Dashboard button has a string of NULL
    if (isset($_POST['dash_board'])){
        // Head admin back to Dashboard
        header('Location: ' . 'dashboard.php', true, 302);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team Photo</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <!-- Edit Thong Photo -->
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Edit Thong's Photo</h1>
        <input type="file" name="thong_photo">
        <button type="submit" name="thong_form" style="height: 35px; width: 100px;">Save</button>
    </form>
    <br>

    <!-- Edit Van Photo -->
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Edit Van's Photo</h1>
        <input type="file" name="van_photo">
        <button type="submit" name="van_form" style="height: 35px; width: 100px;">Save</button>
    </form>
    <br>

    <!-- Edit Nhan Photo -->
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Edit Nhan's Photo</h1>
        <input type="file" name="nhan_photo">
        <button type="submit" name="nhan_form" style="height: 35px; width: 100px;">Save</button> <br> <br>
        <button type="submit" name="dash_board" style="height: 35px; width: 180px;" method="POST">Back to Dashboard</button>
    </form>
    
</body>
</html>