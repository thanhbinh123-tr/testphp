<?php
    if (isset($_POST['registerBtn'])){
        require ("../config.php");

        //declare variable
        $name = $_POST['name'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordrp = $_POST['password-rp'];
    
        if(empty($name) ||empty($phonenumber) || empty($address)|| empty($email)||empty($password) || empty($passwordrp)){
            header("Location: ../login.php?error=emptyfield");
            exit();
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)){
         header("Location: ../login.php?wrongmailandname");
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         header("Location: ../login.php?errormail");
         exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
         header("Location: ../login.php?errornme");
         exit();
        }
        else if($password !== $passwordrp){
         header("Location: ../login.php#bar?error=wrongpassword");
         exit();
        }
        else{
            $query = "INSERT INTO Agency (AgencyName, AgencyPhoneNumber, AgencyAddress, Email, Tel ,Password1)
             VALUES ('".$name."','".$phonenumber."','".$address."','".$email."','','".$password."')";
            $result = pg_query($conn,$query);

            header("Location: ../login.php?register=success");
            exit();
        }
    }
    else{
        header("location: ../login.php?failed");
        exit();
    }
?>
