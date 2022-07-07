<!DOCTYPE html>
<?php


session_start();


   include_once './connect.php';
if ($connection) {
    $selectQuery = "select book_id, book_name from book";
    $resultSet = mysqli_query($connection, $selectQuery);
} else {
    echo "Connection error" . mysqli_connect_error();
}

if ($_SESSION['userType']==2) {
    echo "<script>alert('This user is not allowed to enter to this page')</script>";
    echo "<script>window.location.replace('dashboard.php');</script>";
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!-- comment -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <title>Delete Book</title>
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
                    if ($_SESSION["userType"]==1) {
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
        <div class="container mt-3">
            <h2>Delete Product</h2>
            <form method="post" action="deleteHandler.php">
                <label>Book:</label>
                <select id="bid" name="bid">
                    <?php
                    if (mysqli_num_rows($resultSet) > 0) {
                        while ($row = mysqli_fetch_assoc($resultSet)) {
                            $book_id = $row["book_id"];
                            echo "<option value='$book_id'>";
                            echo $row["book_name"];
                            echo "</option>";
                        }
                    } else {
                        echo "<option>No records</option>";
                    }
                    ?>
                </select>   
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Delete</button>

            </form>
        </div>
    </body>
</html>
