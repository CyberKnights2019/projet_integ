<?php
include "D:/wamp64/www/Projet_integre/entities/clientfideles.php";
include "D:/wamp64/www/Projet_integre/core/clientfidelesF.php";
if(isset($_POST['idClient']) and isset($_POST['PointsFidelite'])  )
{


      $idClient=$_POST['idClient'];
       $PointsFidelite=$_POST['PointsFidelite'];

         $clientfideles = new clientfideles($idClient,$PointsFidelite);
         $clientfidelesF= new clientfidelesF();
         $clientfidelesF->ajouterclientfideles($clientfideles);

        header('Location: Afficherclientfideles.php');
}


?>
<?php
include "D:/wamp64/www/Projet_integre/core/livreurC.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion de livreurs</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <style>


    .zoom {

      transition: transform .2s;
align:center;

    }

    .zoom:hover {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(1.5);
    }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>MOUSSA OPTIC</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Cina</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li>
                    <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href=#>Sous-Menu</a></li>


                    </ul>
</li>
<li>
                    <a><i class="fa fa-table"></i> Commande <span class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">

                      <li><a href="tables_dynamic.php">Liste De Commande</a></li>


                    </ul>


                  </li>
                  <li>
                                      <a><i class="fa fa-automobile"></i> Livraison <span class="fa fa-chevron-down"></span></a>

                                      <ul class="nav child_menu">

                                        <li><a href="Ajout_Livreur.html">Ajout d'un livreur</a></li>
                                        <li><a href="Afficher_livreur.php">Gestion de livreurs</a></li>
<li><a href="liv_commande.php">Gestion de bons de livraison</a></li>
<li><a href="stat_bon.php">Statistiques</a></li>


                                      </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">

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
                    <img src="images/img.jpg" alt="">John Cina
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
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
                       <h3>Form Validation</h3>
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
                         <div class="x_title">
                           <h2>Form validation <small>sub title</small></h2>
                           <ul class="nav navbar-right panel_toolbox">
                             <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                             </li>
                             <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                               <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Settings 1</a>
                                 </li>
                                 <li><a href="#">Settings 2</a>
                                 </li>
                               </ul>
                             </li>
                             <li><a class="close-link"><i class="fa fa-close"></i></a>
                             </li>
                           </ul>
                           <div class="clearfix"></div>
                         </div>
                         <div class="x_content">

                           <form method="post" action="ajoutclientfideles.php" class="form-horizontal form-label-left" novalidate>

                             <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                             </p>
                             <span class="section">ajouter clientfideles </span>

                             <div class="item form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idClient">idClient <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input id="idClient" name="idClient" class="form-control col-md-7 col-xs-12"   placeholder="" required="required" type="text">
                               </div>
                             </div>
                             <div class="item form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="PointsFidelite">PointsFidelite <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="number" min=0 max=100 id="PointsFidelite" value="150" name="PointsFidelite" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>



                                 <button type="submit" class="btn btn-primary">Cancel</button>
                                 <button id="ajouter" name="ajouter" type="submit" class="btn btn-success">Submit</button>


                           </form>
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
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
