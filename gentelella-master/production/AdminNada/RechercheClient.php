<?php
      session_start();
      if(!isset($_SESSION['pseudoA']))
      header('location: login.php');
?>
 <table class="table">
                      <thead>
                        <tr>
                          <th>Pseudo</th>
                          <th>Email</th>
                       </tr>
                      </thead>
					  <?PHP
include "D:/programs/wamp64/www/Projet_integre1//core/clientC.php";
$client1C=new clientC();
$listeClients=$client1C->recupererClientLogin($_POST['pseudo'],$client1C->conn);
?>
<?PHP
foreach($listeClients as $row)
{

?>
                      <tbody>

                        <tr>
                          <td><?PHP echo $row['0']; ?></td>
                          <td><?PHP echo $row['1']; ?></td>
                         <td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer" class="btn btn-primary">
	<input type="hidden" value="<?PHP echo $row['pseudo']; ?>" name="pseudo">
	</form>
	</td>
                        </tr>
                       <?php
}
?>

                      </tbody>
                    </table>
