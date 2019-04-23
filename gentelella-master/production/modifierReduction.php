<?php
include "d:/wamp64/www/Projet_integre1/entities/reduction.php";
include "d:/wamp64/www/Projet_integre1/core/reductionF.php";

$reductionF= new reductionF();


//var_dump($_POST);
if( isset($_POST['idReduction']) and isset($_POST['idProduit']) and isset($_POST['tauxReduction']) and isset($_POST['dateDebut']) and isset($_POST['dateFin'])){



      $idProduit=$_POST['idProduit'];
       $tauxReduction=$_POST['tauxReduction'];
        $dateDebut=$_POST['dateDebut'];
         $dateFin=$_POST['dateFin'];
         $reduction = new reduction($idProduit,$tauxReduction,$dateDebut,$dateFin);
         $reductionF->modifierreduction($reduction,$_POST['idReduction']);
               header('Location: AfficherReduction.php');

}


?>
<?php
include "d:/wamp64/www/Projet_integre1/core/livreurC.php";
require ('header.php');
?>

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

                         <form method="post" action="modifierReduction.php" class="form-horizontal form-label-left" novalidate>

                           <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                           </p>
                           <span class="section">modifier Reduction  </span>
                           <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idReduction">idReduction <span class="required">*</span>
                             </label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text"  id="idReduction" value="150" name="idReduction" required="required" class="form-control col-md-7 col-xs-12">
                             </div>
                           </div>
                           <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idProduit">idProduit <span class="required">*</span>
                             </label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <input id="idProduit" name="idProduit" class="form-control col-md-7 col-xs-12"   placeholder="" required="required" type="text">
                             </div>
                           </div>
                           <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tauxReduction">tauxReduction <span class="required">*</span>
                             </label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="number" min=0 max=100 id="tauxReduction" value="150" name="tauxReduction" required="required" class="form-control col-md-7 col-xs-12">
                             </div>
                           </div>

                           <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dateDebut">dateDebut <span class="required">*</span>
                             </label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="date" id="dateDebut" name="dateDebut" required="required"  class="form-control col-md-7 col-xs-12">
                             </div>
                           </div>
                           <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dateFin">dateFin <span class="required">*</span>
                             </label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="date" id="dateFin" name="dateFin" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                             </div>
                           </div>

                               <button type="submit" class="btn btn-primary">Cancel</button>
                               <button id="modifier" name="modifier" type="submit" class="btn btn-success">Submit</button>


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
