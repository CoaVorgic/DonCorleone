<?php session_start(); include "db_config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rezervacija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- IMPORTED CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
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
                <a class="nav-link" href="rezervacija.php">Rezervacija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dostava.php">Dostava</a>
            </li>
        </ul>
    </div>
</nav>

<div class="reservation">
    <form class="reservation-form" action="rezervacijadb.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
        <h1 class="reservation-heading">Rezervacija</h1>
        <h2 class="reservation-subheading">Bilo bi nam drago da rezervisete mesto kod nas!</h2>
        <div class="reservation-input-block">Ime<span class="required"> *</span><br/>
            <input class="reservation-input-text" type="text" id="reservation-name" name="firstname"/>
        </div>
        <div class="reservation-input-block">Prezime<span class="required"> *</span><br/>
            <input class="reservation-input-text" type="text" id="reservation-name" name="lastname"/>
        </div>
        <div class="reservation-input-block">Telefon<span class="required"> *</span><br/>
            <input class="reservation-input-text" type="text" id="reservation-phone" name="phone"/>
        </div>
        <div class="reservation-input-block">Email<br/>
            <input class="reservation-input-text" type="text" id="reservation-email" name="email"/>
        </div>
        <div class="reservation-input-block">Datum<span class="required"> *</span><br/>
            <input class="reservation-input-text" type="date" id="reservation-date" name="date"/>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
        <script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>

        <div class="reservation-input-block">Vreme<span class="required"> *</span><br/>
            <input class="reservation-input-date" type="time" id="reservation-time" name="time" required/>
        </div>
        <div class="reservation-input-block">Broj gostiju<span class="required"> *</span><br/>
            <select class="reservation-input-date" id="reservation-brojg" name="numberOfGuests">
                <?php 
                    for($i=1; $i<=10; $i++) {
                        echo "<option>$i</option>";
                    }
                ?>
                <option>10+ (Specify in Comments)</option>
            </select>
        </div>
        <div class="reservation-input-block">Komentar / Dodatni zahtevi<br/>
            <textarea class="reservation-comment" id="reservation-comment" name="comment"></textarea>
        </div>
        <div class="reservation-input-block">
            <input class="reservation-submit-btn" name="submit" value="Posalji" type="submit"/>
        </div>
    </form>
</div>

<script type="text/javascript">
    function validateForm() {
        if (isEmpty(document.getElementById('data_3').value.trim())) {
            alert('Name is required!');
            return false;
        }
        if (!validateEmail(document.getElementById('data_5').value.trim())) {
            alert('Email must be a valid email address!');
            return false;
        }
        if (isEmpty(document.getElementById('data_6').value.trim())) {
            alert('Date is required!');
            return false;
        }
        if (isEmpty(document.getElementById('data_7').value.trim())) {
            alert('Time is required!');
            return false;
        }
        if (isEmpty(document.getElementById('data_4').value.trim())) {
            alert('Phone is required!');
            return false;
        }
        return true;
    }
    function isEmpty(str) { return (str.length === 0 || !str.trim()); }
    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
        return isEmpty(email) || re.test(email);
    }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>