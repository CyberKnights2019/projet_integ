<?php

require 'headerfiras.php';
include_once "D:/programs/wamp64/www/Projet_integre1/core/reclamationC.php";
if(isset($_SESSION['pseudo']))
{
    $name=  $_SESSION['pseudo'];
}
else
{
    $name=  "";

}

?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">

                    <span class="input-group-btn">
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
                        <h2>Gestion de reclamation<small></small></h2>
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

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>nom</th>
                                <th>reclamation</th>
                                <th>reponse</th>
                                <th>delete</th>
                                <th>modifier</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $reclamationservice1 = new reclamationC();
                            $listereclamation=$reclamationservice1->afficherparticulier($name);

                            foreach ($listereclamation as  $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id_reclamation']; ?></td>
                                    <td><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['reclamationf']; ?></td>
                                    <td><?php echo $row['reponse']; ?></td>



                                    <td><form method="POST" action="deletereclamation.php">
                                            <input type="submit" name="supprimer" value="Effacer" class="btn btn-danger">
                                            <input type="hidden" value="<?PHP echo $row['id_reclamation']; ?>" name="idd">
                                        </form>
                                    </td>
                                    <td><a href="#edit<?php echo $row['id_reclamation']; ?>" data-toggle="modal" class="btn btn-success">Modifier</a> </td>
                                    <?php include('modifierreclamation.php');?>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
















<?php

require 'footerfiras.php';
?>
