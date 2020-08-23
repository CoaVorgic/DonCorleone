<?php session_start(); include "db_config.php"; ?>
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

        
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/main.css">
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
  </div>
</nav>

<div class="container-fluid">
    <div class="row">       
        <div class="col-sm-12 col-md-12 insert-product-section-form">
            <h3>Dodaj proizvod</h3>
            <hr>
            <form action="jelovnik.php" method="post" enctype="multipart/form-data">
                <label for="food">Naziv hrane:</label><br>
                <input class="add-products-input" type="text" name="food" placeholder="Unesi ime hrane"><br><br>

                <label for="description">Sastav hrane:</label><br>
                <input class="add-products-input" type="text" name="description" placeholder="Unesi sastav hrane"><br><br>

                <label for="price">Cena:</label><br>
                <input class="add-products-input" type="text" name="price" placeholder="Unesi cenu prozivoda"><br><br>

                <label for="image">Fotografija:</label><br>
                <input type="file" class="input-img" name="image" accept="image/x-png,image/gif,image/jpeg"><br>
                <small>Slika velike rezolucije</small><br><br>

                <input type="submit" id="add-products-btn" value="Dodaj hranu" name="submit">
            </form>
            <hr><br>
        </div>

        <!-- Forma za brisanje - premestena je u proizvode -->

<!--
        <div class="col-sm-12 col-md-6 delete-product-section-form">
            <h3>Obrisi proizvod</h3>
            <hr>
            <?php /*
                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($connection, $sql);

                    if(mysqli_num_rows($result) > 0) {

                         while ($row = mysqli_fetch_array($result)) {
                              ?>
                              <div class="col-md-4 col-sm-6">
                                   <!-- MENU THUMB -->
                                   <div class="menu-thumb">
                                        <input type="checkbox" name="delete_names[]" value="<?= $row['name']; ?>"><?php echo $row['name']; ?><br>
                                   </div>
                              </div>
                      <?php } } */?>

                <input type="submit" name="delete-btn" id="delete-btn" name="submit">
            <hr><br>
        </div>
    </div>
</div>
-->
<!--
<script> /*
$(document).ready(function(){

    $('#delete-btn').click(function(){

    if(confirm("Da li ste sigurni da zelite da obrisete izabrane stavke")) {

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
}); */
</script>
-->

</body>
</html>
