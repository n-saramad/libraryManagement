<?php

if (isset($_REEQUEST["submit"]) == true) {
    $book_id = $_REQUEST["book_id"];
    $quantity = $_REQUEST["quantity"];
    $price = $_REQUEST["price"];

   
   include_once './connect.php';

    if ($connection == true) {

        $updateQuery = "update book set quantity=$quanity, price=$price where book_id=$book_id";
        $status = mysqli_query($conection, $updateQury);
        if ($status == true) {
            echo "<script>alert('Record has been succesfully updated into database')</script>";
            echo "<script>window.location.replace('dashboard.php');</script>";
        } else {
            echo "Updation Error:" . mysqli_error($conection);
        }
    } else {

        echo "Connection failed:" . mysqli_connect_error();
    }
} else {
    echo "<script>alert('Please open update product page')</script>";
    echo "<script>window.location.replace('update.php');</script>";
}
