<?php
session_start();
include "d:/wamp64/www/Projet_integre1/core/commandeC.php";
$pa=new PanierC();
$count=$pa->Count();

if (isset($_SESSION['pseudo']))
{
$display2="block";
$display="none";}
else {
$display2="none";
$display="block";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BEN MOUSSA OPTIC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="image/ico" href="glass.ico">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">BEN MOUSSA OPTIC</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                    <li>
                        <a href="NadaClient/inscription.php">
                            <span class="icon icon-user-o" ></span>
                        </a>
                    </li>
                  <li><a href="HisCmd.php" style="display : <?php echo $display2; ?>"><span class="icon icon-person"></span></a></li>
                  <li><a href="tables_dynamic.php"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"><?php echo $pa->Count(); ?></span>
                    </a>
                  </li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
          <li>  <a href="index.php">Accueil</a> </li>
          <li><a href="shopheni.php">Boutique</a></li>
          <li><a href="NadaClient/inscription.php" style="display : <?php echo $display; ?>">Crèer un compte</a></li>
          <li><a href="disconnect.php" style="display : <?php echo $display2; ?>">Deconnexion</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="about.html">A propos de nous</a></li>
        <!--        <li class="has-children">
              <a href="index.php">Home</a>
          <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children">
              <a href="about.html">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
              <li class="has-children">
                  <a href="">shop</a>
                  <ul class="dropdown">

                      <li><a href="shop.php">shopfadhel</a></li>
                      <li><a href="#">Menu Three</a></li>
                  </ul>
              </li>-->



          </ul>
        </div>
      </nav>
    </header>
