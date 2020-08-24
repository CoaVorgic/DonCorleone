<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dostava</title>

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
                <a class="nav-link" href="rezervacija.php">Rezervacija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dostava.php">Dostava</a>
            </li>
        </ul>
    </div>
</nav>

<div class="booking">
    <form action="dostavadb.php" method="post" enctype="multipart/form-data">
        <h1 class="booking-title">Dostava</h1>
        <h3 class="booking-subtitle">Ovde mozete online poruciti iz naseg restorana! Sve dostave preko 500 dinara su besplatne!</h3>
        <div class="booking-choose">
            <p>Jelo<span class="booking-required"> *</span></p>
                <?php
                    require "db_config.php";
                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($connection , $sql) or die(mysqli_error($connection));
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo "<input type=\"radio\" name=\"food\" value=\"".$row["name"]."\" class=\"food\">
                            <label for=\"".$row["name"]."\">".$row["name"]." - ".$row["price"]." din</label><br>";
                        }
                    }
                ?>
            <span>Kolicina<span class="booking-required"> *</span></span>
            <select id="booking-food-amount" name="amount" class="form-control booking-input">
                <option></option>
                <?php 
                    for($i=1; $i<=10; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                ?>
            </select>
        </div>

    <!--
    <div class="booking-choice">
        <p>Pice<span class="booking-required"> *</span></p>
            <?php
                require "db_config.php";
                $sql = "SELECT * FROM menu";
                $result = mysqli_query($connection , $sql) or die(mysqli_error($connection));
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        echo "<input type=\"checkbox\" name=\"".$row["name"]."\" class=\"food\">
                        <label for=\"".$row["name"]."\">".$row["name"]." - ".$row["price"]." din</label><br>";
                    }
                }
            ?>
        <span>Kolicina<span class="booking-required"> *</span></span>
        <select id="booking-drink-amount" name="booking-drink-amount" class="form-control booking-input">
            <option></option>
            <?php 
                for($i=1; $i<=10; $i++) {
                    echo "<option value=\"$i\" name=\"amount\">$i</option>";
                }
            ?>
        </select>
    </div>

            -->
        <div class="booking-choice">
            <p>Firstname<span class="booking-required"> *</span></p>
            <input type="text" id="firstname" name="firstname" class="form-control booking-input"/>
        </div>
        <div class="booking-choice">
            <p>Lastname<span class="booking-required"> *</span></p>
            <input type="text" id="lastname" name="lastname" class="form-control booking-input"/>
        </div>
        <div class="booking-choice">
            <p>Phone<span class="booking-required"> *</span></p>
            <input type="text" id="phone" name="phone" class="form-control booking-input"/>
        </div>
        <div class="booking-choice">
            <p>Address<span class="booking-required"> *</span></p>
            <input type="text" id="address" name="address" class="form-control booking-input"/>
        </div>
        <div class="booking-choice">
            <p>Nacin placanja<span class="booking-required"> *</span></p>
            <select id="method" name="payment" class="form-control booking-input">
                <option></option>
                <option value="cash">Gotovina</option>
                <option value="card">Kartica</option>
            </select>
        </div>
        <div class="booking-choice">Komentar / Dodatni zahtev<br/>
            <textarea id="booking-textarea" name="comment" class="form-control booking-input"></textarea>
        </div>
        <div class="booking-choice">
            <input class="booking-input" name="submit" value="Posalji" type="submit"/>
        </div>
    </form>
</div>

<script type="text/javascript">
    function validateForm() {
        if (!document.getElementsByClassName('jelo').checked) {
            alert('Izabrati jedno jelo!');
            return false;
        }
        if (!document.getElementsByClassName('pice').checked) {
            alert('Izabrati jedno pice!');
            return false;
        }
        /* if (!validateEmail(document.getElementById('data_5').value.trim())) {
            alert('Email must be a valid email address!');
            return false;
        } */
        if (isEmpty(document.getElementById('adress').value.trim())) {
            alert('Adress is required!');
            return false;
        }
        if (isEmpty(document.getElementById('method').value.trim())) {
            alert('Method of payment is required!');
            return false;
        }
        if (isEmpty(document.getElementById('phone').value.trim())) {
            alert('Phone is required!');
            return false;
        }
        if (isEmpty(document.getElementById('option_1').value.trim())) {
            alert('Option is required!');
            return false;
        }
        if (isEmpty(document.getElementById('option_2').value.trim())) {
            alert('Option is required!');
            return false;
        }
        return true;
    }
    function isEmpty(str) { return (str.length === 0 || !str.trim()); }
    /* function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
        return isEmpty(email) || re.test(email);
    } */
</script>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>