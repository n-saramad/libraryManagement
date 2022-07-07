<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Login in Library Management</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



        <!-- Bootstrap core CSS -->
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">

        <main class="form-signin">
            <form action="registrationHandler.php" method="post">
                <img class="mb-4" src="images/zara.png" alt="" width="92" height="50">
                <h1 class="h3 mb-3 fw-normal">Registration in Library Management</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter the username">
                    <label for="username">Name</label>
                </div>



                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>



                <label>Type of User:</label>
                <select id="typeUser" name="typeUser">
                    <option value="1">Type 1</option>
                    <option value="2">Type 2</option>
                </select>   
                <br><br>
                <label>Status:</label>
                <select id="status" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>   

                <br><br>
                <button class="w-100 btn btn-primary" type="submit" id="submit" name="submit">Registration</button>
                <br><br>

                <a href="index.php" class="w-100 btn btn-primary">Back to login</a> 
                <p class="mt-5 mb-3 text-muted">&copy; </p>
            </form>
        </main>



    </body>
</html>
