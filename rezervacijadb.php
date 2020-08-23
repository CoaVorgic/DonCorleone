<?php
session_start();

// ucitavanje baze
require "db_config.php";

// definisanje promenljivih za poslate podatke
$firstname = $lastname = $phone = $email = $date = $time = $numberOfGuests = $comment = "";

// 'isset' proverava da li je vrednost zadata
// 'mysqli_real_escape_string' sprecava unos nepozeljnih podataka
if(isset($_POST['firstname'])) {
    $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
}
if(isset($_POST['lastname'])) {
    $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
}
if(isset($_POST['phone'])) {
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
}
if(isset($_POST['email'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
}
if(isset($_POST['date'])) {
    $date = mysqli_real_escape_string($connection, $_POST['date']);
}
if(isset($_POST['time'])) {
    $time = mysqli_real_escape_string($connection, $_POST['time']);
}
if(isset($_POST['numberOfGuests'])) {
    $numberOfGuests = mysqli_real_escape_string($connection, $_POST['numberOfGuests']);
}
if(isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);
}

// uslov ukoliko su svi podaci poslati onda se izvrsava naredba
if(!empty($firstname) AND !empty($lastname) AND !empty($phone) AND !empty($email) AND !empty($date) AND !empty($time) AND !empty($numberOfGuests)) {
    // SQL naredba za unos rezervacija

    $insert = "INSERT INTO reservation (firstname, lastname, phone, email, dateOfReservation, timeOfReservation, numberOfGuests, comment) VALUES ('$firstname', '$lastname', '$phone', '$email', '$date', '$time', '$numberOfGuests', '$comment');";
    
    // izvrsava se 'insert' naredba u 'connection' bazi
    $res = mysqli_query($connection, $insert) or die(mysqli_error($connection));

    // ukoliko se 'res' uspesno izvrsi ispisace da su uspesno uneti podaci i preusmerice na drugu stranicu
    if($res) {
        echo '<script language="javascript">alert("Uspesno ste rezervisali"); location.href="rezervacija.php" </script>';
    }

    // ukoliko se 'res' ne izvrsi uspesno ispisace koja je bila greska
    else {
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
}
else {
    echo '<script language="javascript">alert("Morate popuniti sva polja sem komentara!!"); location.href="rezervacija.php" </script>';
}