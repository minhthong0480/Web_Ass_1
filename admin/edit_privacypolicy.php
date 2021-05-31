<?php 
    session_start();

    // Check if the method is post and the button has a string of NULL
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['privacy_policy'])){
        // Open the privacy_policy.html with the right of editing it
        $handle = fopen("../privacy_policy.html", 'w+');
        // Write the file html with the new content in the text area
        fwrite($handle, $_POST['html_content']);
        // Closing the file after finishing editing 
        fclose($handle);
        echo "<script> alert('Save successfully!') </script>";
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
    <title>Edit Privacy Policy</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Edit Privacy Policy</h1>
    <form action="" method="POST">
        <textarea name="html_content" cols="110" rows="80" >
            <?php
                echo file_get_contents('../privacy_policy.html');    
            ?>

        </textarea> <br>
        <button type="submit" name="privacy_policy" style="height: 35px; width: 180px;">Save Privacy Policy</button> <br>
        <button type="submit" name="dash_board" style="height: 35px; width: 180px;">Back to Dashboard</button>
    </form>
</body>
</html>