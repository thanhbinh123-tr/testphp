<?php
    if(isset($_POST['loginBtn'])){
     
        require ("../config.php");
        
        $logusername = $_POST["lgid"];
        $logpassword = $_POST["lgpwd"];
   
        if (empty($logusername) || empty($logpassword)){
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else {
           $query1 = "SELECT * FROM Agency WHERE AgencyName = '".$logusername."' AND Password1 = '".$logpassword."'";
           $resultlog = pg_query($conn, $query1);

           if (!$resultlog) {
               header("Location: ../login.php?error=wrongidorpassword");
               exit();
           }
           else {
               session_start();
               $_SESSION['logged'] = true;

               header("Location: ../index.php?login=success");
               exit();
           }
        }
    }

    else{
        header("Location: ../login.php?failed");
        exit();
    }
