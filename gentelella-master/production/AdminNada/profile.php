
<?php
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['pseudoA'] ; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
				<li><a href="afficherClient.php"><i class="fa fa-laptop"></i> Clients' List  </a></li>
					<li><a href="afficherAdmin.php"><i class="fa fa-laptop"></i> Admins' List  </a></li>
                    <li>
                        <a><i class="fa fa-table"></i> Commande <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">

                            <li><a href="../tables_dynamic.php">Liste De Commande</a></li>


                        </ul>
                    </li>


                    <li>
                        <a><i class="fa fa-automobile"></i> Livraison <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">

                            <li><a href="Ajouter_Livreur.php">Ajout d'un livreur</a></li>
                            <li><a href="Afficher_livreur.php">Gestion de livreurs</a></li>
                            <li><a href="liv_commande.php">Gestion de bons de livraison</a></li>
                            <li><a href="stat_bon.php">Statistiques</a></li>


                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-cart-arrow-down"></i> Produit <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">

                            <li><a href="../production/Product/formulaire_produit.php">Ajout d'un produit</a></li>
                            <li><a href="../production/Product/afficherproduit.php">Gestion des produits</a></li>


                        </ul>
                    </li>




                </ul>
              </div>


            </div>
            <!-- /sidebar menu  -->
<?php
include_once "d:/wamp64/www/Projet_integre1/gentelella-master/production/Product/headerfinal.php"
?>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['pseudoA'] ; ?></img>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <li><a href="profile.php"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">


                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                      <h3><?php echo $_SESSION['pseudoA'] ; ?></h3>



                     <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs" href="editProfileAdmin.php"></i>Edit Profile</a>-->
                      <br />

                      <!-- start skills -->

                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">


                      <!-- start of user-activity-graph -->
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>

                         <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

<!--USERS INFO-->
<div class="content">
	 <div class="container">

    <form  name="modif_form"  method="POST" action="modifierAdmin.php"  >

	 <?php

     include "d:/wamp64/www/Projet_integre1/core/adminC.php";

$cc=new adminC();

	$list=$cc->afficheA($_SESSION['pseudoA'],$cc->conn);

	foreach ($list as $ligne)
	{

  ?>


                        <table name="table1" rules="none" width="100%" class="table1">
                           </br>
                           <tr>
                              <td> ID   </td>
                              <td> <input name="id" id="id" type="text" readonly class="readonly-field"  value="<?php echo $ligne['id'] ; ?>"/>  </td>
                           </tr>
                           </br>
                           <tr>
                              <td> Nickname  </td>
                              <td> <input name="pseudoA" type="text"  id="pseudoA" value="<?php echo $ligne['pseudoA'] ; ?>"/> </td>
                           </tr>
                           <tr>
                              <td> Email   </td>
                              <td> <input type="email" name="emailA" id="emailA"  value="<?php echo $ligne['emailA'] ; ?>"/> </td>
                           </tr>
                            <tr>
                                <td> Mot de passe   </td>
                                <td> <input type="password" name="mdpA" id="mdpA"  value="<?php echo $ligne['mdpA'] ; ?>"/> </td>
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
						</div>
						</div>

           <!--USERS INFO FINISHES HERE-->

                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../../vendors/raphael/raphael.min.js"></script>
    <script src="../../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>
</html>
