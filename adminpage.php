<?php

session_start();
include "db_config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adminska stranica</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        ul li{
            display: inline;
            margin-left: 10px;
            text-align: right;
            text-decoration: none;
        }
        li a{
            text-decoration: none;
            font-size: 20px;
            color: rgba(0,0,0,.5);
        }
        a:hover{
            
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg text-center">
    <div class="">
        <a class="navbar-brand" href="#">Don Corleone</a>
    </div>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="proizvodi.php">Proizvodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addprod.php">Dodaj novi proizvod</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminpage.php">Admin stranica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Rezervacija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dostava</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    <span class="navbar-text">
        <?php
            $date = date("d.m.Y");
            echo "Dobrodosli ".$_SESSION['firstname']." , danas je ".$date;
        ?>
    </span>
  </div>
</nav>


<div class="container-fluid" style="margin: 0 auto; background-color: whitesmoke;">
    <div class="adminpage-content text-center">
        <div class="col-sm-4" style="background-color: whitesmoke;">
            <h1 class="text-center">Informacije o adminu</h1>
            <hr>
            <img src="images/<?php echo $_SESSION['picture'];?>" alt="admin_logo" class="adminpage-image">
            <h1>Osnovni podaci</h1>
            <h4><?= "Ime i prezime: ".$_SESSION['firstname']." ".$_SESSION['lastname']; ?></h4>
            <h4><?= "Korisničko ime ".$_SESSION['username']; ?></h4>
            <h4><?= "Adresa stanovanja ".$_SESSION['address']; ?></h4>
            <h4><?= "Datum rođenja ".$_SESSION['birthday']; ?></h4>
        </div>
        <div class="col-sm-4 admin-action" style="background-color: whitesmoke;">
            <h1 class="text-center">Rezervacije</h1>
            <hr>
            <table>
                <?php include 'admin-reservations.php' ?>
                <tr><td colspan="4"><button id="admin-reservation">Obrisi rezervacije</td></tr>
            </table>
        </div>
        <div class="col-sm-4 admin-action" style="background-color: whitesmoke;">
            <h1 class="text-center">Dostava</h1>
            <hr>
            <table>
                <?php include 'admin-booking.php' ?>
                <tr><td colspan="4"><button id="admin-booking">Obrisi dostave</td></tr>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
 
    $('#admin-reservation').click(function(){
  
        if(confirm("Da li ste sigurni da zelite da obrisete izabrane rezervacije")) {
    
            var id = [];
    
            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });
    
            if(id.length === 0) {
                alert("Izaberite bar jedan element");
            }
            else {
                $.ajax({
                    url:'delete-reservations.php',
                    method:'POST',
                    data:{id:id},
                    success:function(data) {
                        setInterval('location.reload()', 100);
                    }
                });
            }
        }
        else {
            return false;
        }
    });

    $('#admin-booking').click(function(){
  
        if(confirm("Da li ste sigurni da zelite da obrisete izabrane dostave")) {
    
        var id = [];
    
        $(':checkbox:checked').each(function(i){
            id[i] = $(this).val();
        });
    
            if(id.length === 0) {
                alert("Izaberite bar jedan element");
            }
            else {
                $.ajax({
                    url:'delete-booking.php',
                    method:'POST',
                    data:{id:id},
                    success:function(data) {
                        setInterval('location.reload()', 100);
                    }
                });
            }
        }
        else {
            return false;
        }
    });
});
</script>

</body>
</html>