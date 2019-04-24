<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ben Moussa Optique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">

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
                <a href="index.php" class="js-logo-clone">Ben Moussa Optic</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>


<!--CLIENT-->
                  <li>
                    <a href="inscription.php">
                      <span class="icon icon-person" ></span>
                    </a>
                  </li>

<!--CLIENT-->



                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

    </header>

	<!--GESTION DU PROFIL CLIENT -->
	<div class="content">
	 <div class="container">

    <form  name="modif_form"  method="POST" action="modifierClient.php"  >

	 <?php
     include 'D:/programs/wamp64/www/Projet_integre1/core/clientC.php';
      

$cc=new clientC();

	$list=$cc->afficheC($_SESSION['pseudo'],$cc->conn);

	foreach ($list as $ligne)
	{

  ?>


                        <table name="table1" rules="none" width="100%" class="table1">
                           </br>
                           <tr>
                              <td> Nickname   </td>
                              <td> <input name="pseudo" id="pseudo" type="text" readonly class="readonly-field"  value="<?php echo $ligne['pseudo'] ; ?>"/>  </td>
                           </tr>
                           </br>
                           <tr>
                              <td> Email  </td>
                              <td> <input name="email" type="email"  id="email" value="<?php echo $ligne['email'] ; ?>"/> </td>
                           </tr>
                           <tr>
                              <td> Password   </td>
                              <td> <input type="text" name="motdepasse" id="motdepasse"  value="<?php echo $ligne['motdepasse'] ; ?>"/> </td>
                           </tr>
                           <tr>

						   </table>
                        <center>
						</br>
						<button type="submit" name="modify"  class="button">Update Informations</button>
                        <!-- <button type="submit" name="deconnect"  class="button">Sign Out</button> -->

                        </center>
						<?php
						}
						?>
                     </form>
						</div>	</div>
				   </body>
				</html>
