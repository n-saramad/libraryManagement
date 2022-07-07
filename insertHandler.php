
<?php

if (isset($_REQEST["submit"]) == true) {
    $bookName = $_REQUEST["bname"];
    $author = $_REQUEST["author"];
    $quantity = $_REQUEST["quantity"];
    $price = $_REQUEST["price"];
    $category = $_REQUEST["category"];
   
   include_once './connect.php';
  

    if ($connection == true) {

        $insertQuery = "insert into book(book_name, author_name, quantity, price, category) values ('$bookName','$author',$quantity,$price, '$category')";
        $status = mysqli_query($connection, $insertQuery);
        if ($status == true) {
            echo "<script>alert('Record has been succesfully inserted into database')</script>";
            echo "<script>window.location.replace('dashboard.php');</script>";
        } else {
            echo "Insertion Error:" . mysqli_error($connection);
        }
    } else {

        echo "Connection failed:" . mysqli_connect_error();
    }
} else {
    echo "<script>alert('Please open insert product page')</script>";
    echo "<script>window.location.replace('insert.php');</script>";
}