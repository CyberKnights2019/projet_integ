<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer Produit</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid text-center">
                    <h5>Voulez-vous vraiment supprimer ce produit </h5>
                    <h2>Nom: <b><?php echo $row['nom'].' '.$row['marque']; ?></b></h2>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">non</button>
                <a href="deletee.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">oui</a>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->