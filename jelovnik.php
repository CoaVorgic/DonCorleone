<?php
session_start();
require_once "db_config.php";

$errors = [];
$food = $description = $price = "";

if(isset($_POST['food']))
{
    $food = mysqli_real_escape_string($connection, $_POST['food']);
}

if(isset($_POST['description']))
{
    $description = mysqli_real_escape_string($connection, $_POST['description']);
}

if(isset($_POST['price']))
{
    $price = mysqli_real_escape_string($connection, $_POST['price']);
}

//---------------------------- POSTAVLJANJE SLIKE - PROVERA SLIKE -------------------------------------------//
$image = "";
// Get image name
if(isset($_FILES['image'])){
    $image = $_FILES['image']['tmp_name'];
}

// image file directory
$target = "images/".basename($image);
//------------------------------------------------------------------------------------------------------------//


if($food == "" || $description == "" || $price == "" || $image == "") {
    echo '<script language="javascript"> alert("Unesite sve podatke!!"); location.href="addprod.php" </script>';
}

else {
    $insert = "INSERT INTO menu (name, description, price, picture) VALUES ('$food', '$description', '$price', '$image');";
    $res = mysqli_query($connection, $insert) or die(mysqli_error($connection));
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if($res)
    {
        echo '<script language="javascript"> alert("Uspesno ste uneli proizvod"); location.href="addprod.php" </script>';
    }
    else{
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
}   

