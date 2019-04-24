<?php
require 'header.php';

if(isset($_GET['id']))
{
  $idC=$_GET['id'];
}
else {$idC =-1;}

 ?>
}

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form action ="HisCmdF.php" class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name">ID Commande</th>
                    <th class="product-price">Prix Total</th>
                    <th class="product-quantity">Etat</th>
                    <th class="product-total">Livraison</th>
                    <th class="product-remove">Payment</th>
                  </tr>
                </thead>
                <tbody>

				<?php
             $cmd=new CommandeC();

             if(isset($_SESSION['trie']) && $_SESSION['trie']==1)
             {
              $liste  =$cmd->afficherCommandeTrie($_SESSION['pseudo']);
             }
             else { $liste  =$cmd->afficherCommandeClient($_SESSION['pseudo']); }


              foreach ($liste as $c ) {


                ?>
                  <tr>

                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $c['ID_C']; ?></h2>
                    </td>
                    <td><?php echo $c['prix_t']; ?> DT</td>
                    <td>
                      <h2 class="h5 text-black"><?php echo $c['etat']; ?></h2>

                    </td>
                    <td>
                    	<h2 class="h5 text-black"><?php echo $c['livraison']; ?></h2>
                    </td>
                    <td><h2 class="h5 text-black"><?php echo $c['payment']; ?></h2></td>
                  </tr>
                  <?php
              }
              ?>
                </tbody>
              </table>

            </div>
              <h6>ID Commande :</h6> <input type="number" name="IDC"  class="form-control text-center"  style="max-width: 150px";  aria-label="Example text with button addon">
              <br>
                      <input type="submit" class="buy-now btn btn-sm btn-primary" value="Recherche" name="rech">
                      <input type="submit" name="Tri" class="buy-now btn btn-sm btn-primary" value="Trier">

          </form>
        </div>

        <div class="row mb-5">
            <div class="site-blocks-table">
        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>

                  </tr>
                </thead>
                <tbody>
                       <?php
             $panier=new PanierC();

              $listeproduits  =$panier->afficherPaniers($idC);


              foreach ($listeproduits as $p ) {


                ?>
                  <tr>

                    <td class="product-thumbnail">
                    <!--  <img src="<?php// echo $p['ID_PRO']; ?>.jpg" alt="Image" class="img-fluid"> -->
                    <a><div class="zoom"><?php
                        $id =$p['ID_PRO'];
                        $db = mysqli_connect("localhost","root","","projet"); //keep your db name
                        $sql = "SELECT * FROM produit where id =$id ";
                        $sth = $db->query($sql);
                        $result=mysqli_fetch_array($sth);
                        echo '<img alt="Image" class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $p['image'] ).'"/>';
                        ?></a>
                       </div>
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $p['nom']; ?></h2>
                    </td>
                    <td><?php echo $p['prix']; ?> DT</td>
                    <td>
                        <?php echo $p['QTE']; ?>
                    </td>

                    <td><?php echo $p['prix']*$p['QTE']; ?> DT</td>

                  </tr>
                     <?php
                       }
                        ?>
                </tbody>
              </table>
               </div>
              </div>






<?php require 'footer.php';?>
