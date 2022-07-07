<?php

if (isset($_REQUEST["submit"]) == true) {
    $book_id = $_REQUEST["bid"];

   include_once './connect.php';

    if ($conection == true) {

        $deleteQuery = "delete * from book where book_id=$book_id";
        $status = mysqli_query($connection, $deleteQuery);
        if ($status == true) {
            echo "<script>alert('Record has been succesfully deleted from database')</script>";
            echo "<script>window.location.replace('dashboard.php');</script>";
        } else {
            echo "Deletion Error:" . mysqli_error($connection);
        }
    } else {

        echo "Connection failed:" . mysqli_connect_error();
    }
} else {
    echo "<script>alert('Please open delete product page')</script>";
    echo "<script>window.location.replace('delete.php');</script>";
}
