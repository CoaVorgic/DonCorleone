<?php
session_start();
include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Don Corleone</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- PRE LOADER -->
<section class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</section>

<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.php" class="navbar-brand">Don <span>.</span> Corleone</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">O nama</a></li>
                    <li><a href="#team" class="smoothScroll">Glavni kuvar</a></li>
                    <li><a href="#menu" class="smoothScroll">Meni</a></li>
                    <li><a href="ajax" class="smoothScroll">Jelovnik</a></li>
                   <li><a href="#contact" class="smoothScroll">Kontakt</a></li>
                    <li><a href="dostava.php" class="smoothScroll">Dostava</a></li>
                    <li><a href="admin.php" class="smoothScroll">Aboard</a></li>
                    <li><a href="rezervacija.php" class="section-btn">Rezervišite sto</a></li>
               </ul>
          </div>
     </div>
</section>

<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="row">
          <div class="owl-carousel owl-theme">
               <div class="item item-first">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-8 col-sm-12">
                                   <h3>Don Corleone Restoran</h3>
                                   <h1>Vrhunsko osoblje u nasem lokalu</h1>
                                   <a href="#team" class="section-btn btn btn-default smoothScroll">Upoznaj naše zaposlene</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="item item-second">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-8 col-sm-12">
                                   <h3>Tvoj savršen obrok</h3>
                                   <h1>Specijaliteti kod nas!</h1>
                                   <a href="#menu" class="section-btn btn btn-default smoothScroll">Baci pogled</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="item item-third">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-8 col-sm-12">
                                   <h3>Novi Restoran u gradu!</h3>
                                   <h1>Uživaj u nasem ambijentu i hrani!</h1>
                                   <a href="#contact" class="section-btn btn btn-default smoothScroll">Kontakt</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                              <h4>Procitaj našu priču</h4>
                              <h2>Mi pravimo ukusnu hranu već 20 godina</h2>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.4s">
                              <p></p>
                              <p></p>
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                         <img src="images/about-image.jpg" class="img-responsive" alt="">
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- TEAM -->
<section id="team" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Upoznajte glavnog kuvara i menadzera restorana</h2>
                    </div>
               </div>
               <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/petar.jpg" class="img-responsive" alt="">
                         <div class="team-hover">
                              <div class="team-item">
                                   <h4>Rodjen sam 09.05.1998 u Subotici. U osnovnoj školi sam se preselio za Novi Kneževac gde sam i odrastao.
                                       Završio sam srednju tehničku školu u Kikindi, Elektrotehničar Telekomunikacija. Mnogo volim životinje! Imam mačka po imenu Mili koji bi sve na svetu dao za malo maženja.
                                       Mnogo volim da slušam muziku,to me opušta. Slušam često našu domaću muziku, ali i stranu elektronsku.</h4>
                              </div>
                         </div>
                    </div>
                    <div class="team-info">
                         <h3>Jager Petar</h3>
                         <p>Šef kuhinje</p>
                    </div>
               </div>

               <div class="col-md-4 col-sm-4" style="float: left">
                  <div class="team-thumb wow fadeInUp"  data-wow-delay="0.2s">
                      <img src="images/kuvar.png" class="img-responsive" alt="kuvar logo">
                  </div>
               </div>

               <div class="col-md-4 col-sm-4" style="float: right">
                   <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/aleksandar.jpg" class="img-responsive" alt="">
                         <div class="team-hover">
                              <div class="team-item">
                                   <h4>Rodjen sam 30.05.1998 u Subotici. Isao sam u osnovnu skolu Jovan Jovanovic Zmaj.
                                       Zavrsio sam srednju tehničku školu "Ivan Saric", smer Saobracajno-Transportni tehnicar.
                                       Bavim se sportom, treniram kikboks i fudbal. Imam psa po imenu Dzoni i mnogo ga obozavam!
                                       U slobodno vreme volim da se druzim, volim da slusam muziku.</h4>
                              </div>
                         </div>
                    </div>

                    <div class="team-info">
                         <h3>Aleksandar Vorgic</h3>
                         <p>Menadzer</p>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- MENU-->
<section id="menu" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Naš meni</h2>
                    </div>
               </div>
                    <?php

                    $sql = "SELECT * FROM menu ORDER BY ID DESC";
                    $result = mysqli_query($connection, $sql);

                    if(mysqli_num_rows($result) > 0) {

                         while ($row = mysqli_fetch_array($result)) {
                              ?>
                              <div class="col-md-4 col-sm-6">
                                   <!-- MENU THUMB --> 
                                   <div class="menu-thumb">
                                        <a href="<?= $row['picture']; ?>" class="image-popup" title="<?= $row['description']; ?>">
                                        <img src="images/<?= $row['picture']; ?>" class="img-responsive menu-img" style="height: 300px;" alt="<?= $row['picture']; ?>">

                                        <div class="menu-info">
                                             <div class="menu-item">
                                                  <h3><?= $row['name']; ?></h3>
                                                  <p><?= $row['description']; ?></p>
                                             </div>
                                             <div class="menu-price">
                                                  <span><?= $row['price']; ?> rsd</span>
                                             </div>
                                        </div>
                                        </a>
                                   </div>
                              </div>
                      <?php } } ?>
          </div>
     </div>
</section>


<!-- TESTIMONIAL -->
<section id="testimonial" data-stellar-background-ratio="0.5">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Zanimljivosti o hrani</h2>
                    </div>
               </div>
               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">
                         <div class="item">
                              <p>Život bez ijedne gozbe dug je put na kome nema krčme.</p>
                         </div>
                         <div class="item">
                              <p>Brige se lakše ispiraju supom.</p>
                         </div>
                         <div class="item">
                              <p>Nema sumnje da je potreba za hranom još uvek najglavniji uzrok velikim političkim događajima.</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>


<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">
               <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2766.822585281119!2d19.659959314849534!3d46.09451369918522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474366d1b03dbbc5%3A0xfbb187d5a85acad0!2sVTS%20Subotica!5e0!3m2!1sen!2srs!4v1581704770001!5m2!1sen!2srs" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
               </div>
               <div class="col-md-6 col-sm-12">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Kontaktirajte nas</h2>
                         </div>
                    </div>
                    <!-- CONTACT FORM -->
                    <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                         <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                         <h6 class="text-success">Vasa poruka je poslata uspešno</h6>
                         <!-- IF MAIL NOT SENT -->
                         <h6 class="text-danger">E-mail mora biti validan i mora imati bar 1 karatker</h6>
                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="cf-name" name="name" placeholder="Ime">
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <input type="email" class="form-control" id="cf-email" name="email" placeholder="E-mail">
                         </div>
                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Naslov">
                              <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Reci nam svoju ideju"></textarea>
                              <button type="submit" class="form-control" id="cf-submit" name="submit">Pošalji poruku</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</section>


<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">
               <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2 class="wow fadeInUp" data-wow-delay="0.2s">Pronadji nas</h2>
                         </div>
                         <address class="wow fadeInUp" data-wow-delay="0.4s">
                              <p>Marka Oreškovića 16<br>Subotica</p>
                         </address>
                    </div>
               </div>
               <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2 class="wow fadeInUp" data-wow-delay="0.2s">Rezervacije</h2>
                         </div>
                         <address class="wow fadeInUp" data-wow-delay="0.4s">
                              <p>0611770265</p>
                              <p><a href="mailto:info@company.com">pdzeger@gmail.com</a></p>
                         </address>
                    </div>
               </div>
               <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                         <div class="section-title">
                              <h2 class="wow fadeInUp" data-wow-delay="0.2s">Radno vreme</h2>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.4s">
                              <div>
                                   <strong>Od ponedeljka do petka</strong>
                                   <p>7:00 AM - 11:00 PM</p>
                              </div>
                              <div>
                                   <strong>Subota - Nedelja</strong>
                                   <p>09:00 AM - 00:00 AM</p>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                         <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-google"></a></li>
                    </ul>
                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                         <p>Don Corleone VTŠ</p>
                    </div>
               </div>
          </div>
     </div>
</footer>


<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>