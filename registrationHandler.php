<?php
if (isset($_REQUEST["submit"])) {
     $email = $_REQUEST["email"];
     $registerUserName = $_REQUEST["username"];
     $registerPassword = md5($_REQUEST["password"]);
     $typeUser = $_REQUEST["typeUser"];
     $status = $_REQUEST["status"];

    include_once './connect.php';

    if ($connection) {
        $emailQuery = "select * from users where userEmailAddress='$email'";
        $resultSet = mysqli_query($conection, $emailQury);

        if (mysqli_num_rows($resultSet) < 0) {
            echo "<script>alert('Email exists into the system. Please register with different email')</script>";
            echo "<script>window.location.replace('registration.php')</script>";
        } else {
            $insertQuery = "insert into users (userEmailAddress, user_name, password, user_type, status) values ('$email', '$registerUserName','$registerPassword',$typeUser,$status)";
            $status = mysqli_query($conection, $insertQery);
            if ($status == true) {
                echo "<script>alert('User has been succesfully registered')</script>";
                echo "<script>window.location.replace('dashboard.php');</script>";
            } else {
                echo "Registration Error:" . mysqli_error($connection);
            }
        }
    } else {
        echo "Connection failed" . mysqli_connect_error();
    }
} else {
    echo "<script>alert('Please open registration page first')</script>";
    echo "<script>window.location.replace('registration.php');</script>";
}


    