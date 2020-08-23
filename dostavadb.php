<?php
session_start();
require_once "db_config.php";

$food = $amount = $firstname = $lastname = $phone = $address = $payment = $comment = "";
if(isset($_POST['food'])) {
    $food = mysqli_real_escape_string($connection, $_POST['food']);
    $sql_id = "SELECT ID FROM menu WHERE name='$food'";
    $food_result = mysqli_query($connection, $sql_id);
    $row_id = mysqli_fetch_assoc($food_result);
    $id = $row_id["ID"];
}
if(isset($_POST['amount'])) {
    $amount = mysqli_real_escape_string($connection, $_POST['amount']);
}
if(isset($_POST['firstname'])) {
    $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
}
if(isset($_POST['lastname'])) {
    $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
}
if(isset($_POST['phone'])) {
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
}
if(isset($_POST['address'])) {
    $address = mysqli_real_escape_string($connection, $_POST['address']);
}
if(isset($_POST['payment'])) {
    $payment = mysqli_real_escape_string($connection, $_POST['payment']);
}
if(isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);
}

/*
echo "$id<br>";
echo "$amount<br>";
echo "$phone<br>";
echo "$address<br>";
echo "$payment<br>";
echo "$comment<br>";
*/

if(!empty($food) AND !empty($amount) AND !empty($phone) AND !empty($address) AND !empty($payment)) {
    $sql = "INSERT INTO delivery (food_ID, food_amount, firstname, lastname, phone, address, payment, comment) VALUES ('$id', '$amount', '$firstname', '$lastname', '$phone', '$address', '$payment', '$comment');";

    if(mysqli_query($connection, $sql)){  
        echo '<script language="javascript"> alert("Uspesno ste izvrsili narudzbu"); location.href="dostava.php" </script>';
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
}
else {
    echo '<script language="javascript"> alert("GRESKA!! Morate popuniti sva polja sem komentara!"); location.href="dostava.php" </script>';
}



