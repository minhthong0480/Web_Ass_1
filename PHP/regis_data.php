<?php
    include('config_db.php');
    // echo "Connected successfully";
    

    $showAlert = false; 
    $showError = false; 
    $exists=false;
        
    if (isset($_POST["Submit"]))  {
        
        // Include file which makes the
        // Database Connection.
        
        
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $retypepass = $_POST["retypepass"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $zipcode = $_POST["zipcode"];
        $country = $_POST["country"];
        
        $phone_pattern = '/^(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])$/';

        $email_pattern = '/^(?!\.)[a-z.?A-Z.?0-9]{3,}(?<!\.)\@(?!\.)[a-z.?A-Z.?0-9]+(?<!\.)[.]{1}[a-zA-Z]{2,5}(?<!\.)$/';

        $pass_pattern = '/^(?!.*[\s])(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(.{8,20})$/';

        $zipcode_pattern = '/^[0-9]{4,6}$/';

        $phoneerr = $emailerr = $passerr = $firstnameerr = $lastnameerr = $addresserr = $cityerr = $zipcodeerr="";
    
        $valid = true;
          
            if (empty($phone)) {
                $valid = false;
            } else {
                // $phone = test_input($_POST["phone"]);
                    if(!preg_match($phone_pattern,$phone)){
                        $valid = false;
                    }
            }

            if (empty($email)) {
                $valid = false;
            } else {
                // $email = test_input($_POST["email"]);
                    if(!preg_match($email_pattern,$email)){
                        $valid = false;
                    }
            }

            if (empty($pass)) {
                $valid = false;
            } else {
                // $pass = test_input($_POST["pass"]);
                    if(!preg_match($pass_pattern,$pass)){
                        $valid = false;
                    }
            }

            if (empty($firstname) || strlen($firstname) < 3) {
                $valid = false;
            }

            if (empty($lastname)||strlen($lastname) < 3) {
                $valid = false;
            }

            if (empty($address) || strlen($address) < 3) {
                $valid = false;
            }

            if (empty($city) || strlen($city) < 3) {
                $valid = false;
            }

            }if (empty($zipcode) || strlen($zipcode) < 3) {
                $valid = false;
            }
        
        
        
        $sql = "Select * from users where usersPhone='$phone' or usersEmail = '$email'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result); 
        
        
        if($num == 0) {
            if(($pass == $retypepass) && $exists==false && $valid == true) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
        
                $sql = "INSERT INTO `users` (`usersPhone`, `usersEmail`, `usersPass`, `usersFirstname`, `usersLastname`,`usersAddress`,`usersCity`,`usersZipcode`) VALUES ('$phone', '$email', '$hash', '$firstname','$lastname','$address','$city','$zipcode')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    $showAlert = true;  
                }
            } 
            else { 
                $showError = "Input is not valid"; 
            }    
        } 
        
    if($num>0){
        $exists="User already exits"; 
    }
     
    

    if($showAlert) {
        
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">

            <strong>Success!</strong> Your account is 
            now created and you can login. Click here -> 
            <a href="login_user.php"><button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button></a>
             
        </div> '; 
    }

    if($showError) {

        echo ' <div role="alert"> 
        <strong>Error!</strong> '. $showError.'
        <a href="register.html"><button type="button" class="close" 
        data-dismiss="alert aria-label="Close">
        <span aria-hidden="true">×</span> 
    </button></a>
    </div> '; 
    }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <a href="register.html"><button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button></a>
       </div> '; 
     }