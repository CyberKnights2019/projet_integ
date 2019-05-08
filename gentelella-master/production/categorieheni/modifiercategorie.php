
<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id_cat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">modifier Categorie</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="modifiercat.php?id=<?php echo $row['id_cat']; ?>">

                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Nom:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="nom" autofocus onblur="verifierNom()"  id="Nom" class="form-control" value="<?php echo $row['nom_categorie']; ?>">
                                <div class="alert alert-danger" id="alertNom" style="display: none"> rempli le champs
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