<?php
session_start();
include "db_config.php";

$username = $password = "";

// 'isset' proverava da li je vrednost zadata
// 'mysqli_real_escape_string' sprecava unos nepozeljnih podataka
if(isset($_POST['username'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
}

if(isset($_POST['password'])) {
    $password = mysqli_real_escape_string($connection, $_POST['password']);
}
// U $sql samo definisemo komandu
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

// Pomocu mysqli_query izvrsavamo sve sl pozive tj. funkcije
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

// Sada proveravamo da li taj red postoji u tabeli admins baze podataka
if(mysqli_num_rows($result) > 0) {
    //Ukoliko smo pronasli red u bazi sa tim usernamemom i passwordom, onda uzimamo podatke iz tog reda
    //Sad uzimamo sve podatke o korisniku iz tog reda
    while($record = mysqli_fetch_array($result)) {
        $_SESSION['firstname'] = $record['firstname'];
        $_SESSION['lastname'] = $record['lastname'];
        $_SESSION['username'] = $record['username'];
        $_SESSION['email'] = $record['email'];
        $_SESSION['address'] = $record['address'];
        $_SESSION['birthday'] = $record['birthday'];
        $_SESSION['password'] = $record['password'];
        $_SESSION['picture'] = $record['picture'];

        /*
        echo $_SESSION['username'];
        echo $_SESSION['password'];
        echo $_SESSION['birthday'];
        echo $_SESSION['address'];
        echo $_SESSION['firstname'];
        echo $_SESSION['lastname'];
        echo $_SESSION['picture'];
        echo $_SESSION['picture'];
        */
        header("Location: adminpage.php");
    }
}
else{
    header("Location: admin.php?error=1");
}