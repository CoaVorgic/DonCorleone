<?php session_start(); include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Don Corleone</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Početna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Proizvodi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Dodaj novi proizvod</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Admin stranica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Rezervacija</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Dostava</a>
        </li>
    </ul>
  </div>
</nav>


<div class="container admin">
    <div class="row">
        <div class="col-sm-12">
            <h1>Login</h1>
            <hr>
            <form action="loginuser.php" method="post" class="admin-form">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Enter your password"><br><br>
                <button type="submit" class="admin-login-btn" name="submit">Login <i class="fas fa-long-arrow-alt-right"></i></button>
            </form>

        </div>
    </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>