<!DOCTYPE html>
<?php

if (isset($_SESSION["email"]) == false) {
    echo "<script>alert('Please do login first')</script>";
    echo "<script>window.location.replace('index.php');</script>";
}

include_once './connect.php';
if ($connection) {
    $selectQuery = "select book_id, book_name from book";
    $resultSet = mysqli_query($connection, $selectQuery);
} else {
    echo "Connection error" . mysqli_connect_error();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!-- comment -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <title>Search Book</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert.php">Insert Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update.php">Update Product</a>
                    </li>
                    <?php
                    if ($_SESSION["userType"] == 1) {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="delete.php">Delete Product</a>';
                        echo '</li>';
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>
        <h2>Book search</h2>

        <form class="form-select" action="searchHandler.php" method="post">
            Book name: <input type="text" name="search"><br>
            <input type ="submit" value="search">
        </form>


    </body>
</html>
