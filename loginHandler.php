<?php
session_start();
if (isset($_REQUEST["submit"]) == true) {
    $email = $_REQUEST["email"];
    $loginPassword = md5($_REQUEST["password"]);

    include_once './connect.php';

    if ($connection) {
        $emailQuery = "select * from users where email = '$email' and password ='$loginPassword'";

        $resultSet = mysqli_query($connection, $emailQuery);

       if (mysqli_num_rows($resultSet) > 0) { 
            $row = mysqli_fetch_assoc($resultSet);
            $_SESSION['email']=$row['email'];
             $status=$row['status'];
            
                if($status!=='Active'){
                     echo "<script>alert('User are not allowed to access')</script>";
                     
                }
                    else{header('location:dashboard.php');}
                    
                     
                
      } else {    

            echo "<script>alert('Incorrect email and password, Please enter correct credentials')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }
    } else {
        echo "Connection error" . mysqli_connect_error();
    }
}else {
    echo "<script>alert('You're doing something wrong)</script>";
    echo "<script>window.location.replace('index.php');</script>";
}
