
<?php
session_start();
include "D:/programs/wamp64/www/Projet_integre1/core/CategorieService.php";
include "D:/programs/wamp64/www/Projet_integre1/entities/CategorieHeni.php";

if(isset($_GET['id']))
{
    $pC=$_GET['id'];
}
else {$pC =-1;}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ajout d'un produit</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
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
                        <!--  <h2><?php echo $_SESSION['pseudoA'] ; ?></h2>-->
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />
                <?php
                include_once "D:/programs/wamp64/www/Projet_integre1/gentelella-master/production/Product/headerfinal.php"
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
                                <!--      <img src="images/img.jpg" alt=""><?php echo $_SESSION['pseudoA'] ; ?></img>          -->                      <span class=" fa fa-angle-down"></span>
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


        <div class="container">
            <div class="col-sm-8 col-sm-offset-0">

                <br />
                <br />
                <br />
                <!-- add -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Ajout d'un produit</h3>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form method="POST" action="ajoutproduit.php" enctype="multipart/form-data">
                                        <br />
                                        <br />
                                        <br />
                                        <br />

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label style="position:relative; top:7px;">Nom:</label>
                                            </div>
                                            <div class="col-lg-16">
                                                <input type="text" name="nom" autofocus onblur="verifierNom()"  id="Nom" class="form-control">
                                                <div class="alert alert-danger" id="alertNom" style="display: none"> rempli le champs
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height:10px;"></div>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label style="position:relative; top:7px;">Marque:</label>
                                            </div>
                                            <div class="col-lg-16">
                                                <input type="text" autofocus onblur="verifierMarque()" id="Marque" name="marque" class="form-control" >
                                                <div class="alert alert-danger" id="alertMarque" style ="display:none">rempli le champs </div>
                                            </div>
                                        </div>
                                        <div style="height:10px;"></div>
                                        <div class="col-lg-2">
                                            <label style="position:relative; top:7px;">categorie:</label>
                                        </div>
                                        <td><select id="heard" class="form-control" name="categorie" >

                                                <?php
                                                $categorieservice1 = new CategorieService();
                                                $listecategorie=     $categorieservice1->afficherCategorie();


                                                foreach($listecategorie as $row){


                                                    ?>

                                                    <option  value="<?php echo $row['nom_categorie']; ?>"><?php echo $row['nom_categorie']; ?></option>
                                                <?php } ?>
                                            </select></td>




                                        <!--        <div class="row">
                                                    <div class="col-lg-2">
                                                        <label style="position:relative; top:7px;">Categorie:</label>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="categorie" autofocus onblur="verifierCategorie() "id="Categorie" class="form-control" >

                                                    </div>
                                                </div> -->
                                        <div style="height:10px;"></div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label style="position:relative; top:7px;">Quantite:</label>
                                            </div>
                                            <div class="col-lg-10">
                                                <input type="number" name="quantite" class="form-control" >
                                            </div>
                                        </div>
                                        <div style="height:10px;"></div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label style="position:relative; top:7px;">Prix:</label>
                                            </div>
                                            <div class="col-lg-10">
                                                <input type="number" name="prix" class="form-control" >
                                            </div>
                                        </div>
                                        <div style="height:10px;"></div>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label style="position:relative; top:7px;">Description:</label>
                                            </div>
                                            <div class="col-lg-10">
                                                <input type="text" name="description" class="form-control" >
                                            </div>
                                        </div>
                                        <div style="height:10px;"></div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label style="position:relative; top:7px;">Image:</label>
                                            </div>
                                            <div class="col-lg-10">
                                                <input type="file" accept="image/png, image/jpeg" name="imgproduit"  id="image">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                                <button type="submit" id="btn" name="add" class="btn btn-primary">ajouter</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



          </div>
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
            <!-- bootstrap-daterangepicker -->
            <script src="../../vendors/moment/min/moment.min.js"></script>
            <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap-datetimepicker -->
            <script src="../../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
            <!-- Ion.RangeSlider -->
            <script src="../../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
            <!-- Bootstrap Colorpicker -->
            <script src="../../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
            <!-- jquery.inputmask -->
            <script src="../../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
            <!-- jQuery Knob -->
            <script src="../../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
            <!-- Cropper -->
            <script src="../../vendors/cropper/dist/cropper.min.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="../../build/js/custom.min.js"></script>
            <script>
                function verifierNom()
                {
                    var nom = document.getElementById("Nom").value;

                    if(nom == "")
                    {
                        document.getElementById("alertNom").style.display = "block";
                        document.getElementById("btn").disabled = true;
                    }
                    else
                    {
                        document.getElementById("alertNom").style.display = "none";
                        document.getElementById("btn").disabled = false;
                    }
                }
                function verifierMarque()
                {
                    var marque = document.getElementById("Marque").value;

                    if(marque == "")
                    {
                        document.getElementById("alertMarque").style.display = "block";
                        document.getElementById("btn").disabled = true;
                    }
                    else
                    {
                        document.getElementById("alertMarque").style.display = "none";
                        document.getElementById("btn").disabled = false;
                    }
                }
                function verifierCategorie()
                {
                    var categorie = document.getElementById("Categorie").value;

                    if(categorie == "")
                    {
                        document.getElementById("alertCategorie").style.display = "block";
                        document.getElementById("btn").disabled = true;
                    }
                    else
                    {
                        document.getElementById("alertCategorie").style.display = "none";
                        document.getElementById("btn").disabled = false;
                    }
                }


            </script>
</body>

<!-- /.modal -->
