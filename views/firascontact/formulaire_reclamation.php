<?php

require 'headerfiras.php';
if(isset($_SESSION['pseudo']))
{
  $name=  $_SESSION['pseudo'];
}
else
{
    $name=  "";

}
?>
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
                        <h3>Ajout d'une reclamation</h3>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form method="POST" action="ajoutreclamation.php" enctype="multipart/form-data">
                                <br />
                                <br />
                                <br />
                                <br />

                                <div class="row">
                                    <div class="col-lg-2">
                                        <label style="position:relative; top:7px;">Nom:</label>
                                    </div>
                                    <div class="col-lg-16">
                                        <input type="text" name="nom" value="<?php echo ($name); ?>" readonly >
                                        <div class="alert alert-danger" id="alertNom" style="display: none"> rempli le champs
                                        </div>
                                    </div>
                                </div>
                                <div style="height:10px;"></div>

                                <div class="row">
                                    <div class="col-lg-2">
                                        <label style="position:relative; top:7px;">reclamation:</label>
                                    </div>
                                    <div class="col-lg-16">
                                        <input type="text" name="reclamation_m" autofocus onblur="verifierNom()"  id="reclamation" class="form-control">
                                        <div class="alert alert-danger" id="alertNom" style="display: none"> rempli le champs
                                        </div>
                                    </div>
                                </div>
                                <div style="height:50px;width: "></div>



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










<?php

require 'footerfiras.php';
?>


