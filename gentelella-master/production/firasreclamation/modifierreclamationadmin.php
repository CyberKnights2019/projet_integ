
<!-- Edit -->


<div class="modal fade" id="edit<?php echo $row['id_reclamation']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">modifier reclamation</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="modifierrecadmin.php?id=<?php echo $row['id_reclamation']; ?>">

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Nom:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="nom" autofocus onblur="verifierNom()"  id="Nom" class="form-control" value="<?php echo $row['nom']; ?>"readonly>
                                <div class="alert alert-danger" id="alertNom" style="display: none"> rempli le champs
                                </div>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">reclamation:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="reclamationn" autofocus onblur=""  id="reclamationn" class="form-control" value="<?php echo $row['reclamationf']; ?>"readonly>
                                <div class="alert alert-danger" id="alertreclamation" style="display: none"> rempli le champs
                                </div>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">reponse:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="reponse" autofocus onblur=""  id="reponse" class="form-control" value="<?php echo $row['reponse']; ?>" >
                                <div class="alert alert-danger" id="" style="display: none"> rempli le champs
                                </div>
                            </div>
                        </div>
                        <div style="height:10px;"></div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                <button type="submit" id="btn" name="edit" class="btn btn-warning">enregistrer</button>
            </div>
            </form>
        </div>
    </div>
</div>
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


</script>
<!-- /.modal -->