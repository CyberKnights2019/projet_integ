<?php

require 'header.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $produit=new produitt();
    $prod=$produit->afficherr($id);
    $_SESSION['id_pro'] = $id;
    $_SESSION['Cart']=0;
   $_SESSION['singleShop']=1;
if ($_SESSION['qteCheck']!="false" && $_SESSION['qteCheck']!="true")
{
  $_SESSION['qteCheck']="1";
}



}

?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <?php foreach ($prod as $p ) {

              $db = mysqli_connect("localhost","root","","projet"); //keep your db name

                        $sql1= "SELECT * FROM reduction where idProduit=$id";

                        $sth1 = $db->query($sql1);

                        $result1=mysqli_fetch_array($sth1);
                         foreach ($sth1 as $row) {}

                                         if(mysqli_affected_rows($db)!=0)
                                         {
                                         $p['prix']=$p['prix']-($p['prix']*$row['tauxReduction'])/100;

                                          }
?>

            <div class="col-md-6">
                <a><div class="zoom"><?php
                    $id =$p['id'];
                    $db = mysqli_connect("localhost","root","","projet"); //keep your db name
                    $sql = "SELECT * FROM produit where id =$id ";
                    $sth = $db->query($sql);
                    $result=mysqli_fetch_array($sth);
                    echo '<img alt="Image" class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $p['image'] ).'"/>';
                    ?></a>
                   </div>
                 </div>

            <div class="col-md-6">
                <h2 class="text-black"><?php echo $p['nom']; ?></h2>
                <p class="text-black"><?php echo $p['marque']; ?></p>
                <p class="text-black"><?php echo $p['description']; ?></p>
                </h2>
                <p><strong class="text-primary h4"><?php echo $p['prix']; ?> DT</strong></p>
                <div class="mb-1 d-flex">

                    <?php
                    }
                    ?>

                    <form method="POST" action="ajoutpanier.php" >

                        <div class="mb-5">
                            <div class="input-group mb-3" style="max-width: 150px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                </div>

                                <input type="text" name="qte" id="qte" class="form-control text-center" value=1  placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">

                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                </div>

                            </div>
                            <div>
                              <?php
                              if($_SESSION['qteCheck']=="false")
                              {
                              echo'<p style ="color : red"><strong>*Quantite indisponible ! </strong></p>';
                              $_SESSION['qteCheck']="true";
                            }
                             ?>
                            </div>
                            <input  type="submit" class="buy-now btn btn-sm btn-primary"   name="ajouter" value="Ajouter" >

                        </div>

                        <p><a href="shopheni.php" class="buy-now btn btn-sm btn-primary">Shop</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php';?>
