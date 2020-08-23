<?php session_start(); require "db_config.php"; ?>

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

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
                <a class="nav-link" href="proizvodi.php">Proizvodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addprod.php">Dodaj novi proizvod</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin stranica</a>
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
    </div>
</nav>


<div class="products-content">
    <div class="col-sm-12 products-content-section">
        <h3 class="products-content-section-title">Svi proizvodi</h3>
        <hr>
            <?php
                $sql= "SELECT * FROM menu";
                $result = mysqli_query($connection , $sql) or die(mysqli_error($connection));
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                ?>
            <div class="col-sm-12 products-content-section-card">
                <div class="col-sm-3 products-content-section-card-img">
                    <img class="img-responsive" src="images/<?= $row['picture'];?>" alt="<?= $row['name'];?>">
                </div>
                <div class="col-sm-9">
                    <div class="col-sm-7 products-content-section-card-description">
                        <h3><?= $row['name'];?></h3>
                        <h6><?= $row['description'];?></h6>
                    </div>
                    <div class="col-sm-4 products-content-section-card-price">
                        <h3><?= $row['price'];?> RSD</h3>
                    </div>
                    <div class="col-sm-1 products-content-section-card-price">
                        <input type="checkbox" class="delete-check" name="delete_names[]" value="<?= $row['name']; ?>">
                    </div>
                </div>
            </div>
            <?php } } ?>

            <input type="submit" name="delete-btn" id="delete-btn" name="submit">
        </div>
    </div>
</div>


<script>
$(document).ready(function(){
 
    $('#delete-btn').click(function(){
  
    if(confirm("Da li ste sigurni da zelite da obrisete izabrane stavke?")) {
   
        var id = [];
   
        $(':checkbox:checked').each(function(i){
            id[i] = $(this).val();
        });
   
    if(id.length === 0) {
        alert("Izaberite bar jedan element");
    }
    else {
            $.ajax({
                url:'delete.php',
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


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>

