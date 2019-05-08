<?php

require 'header.php';


if ($_SESSION['qteCheck']!="false" && $_SESSION['qteCheck']!="true")
{
  $_SESSION['qteCheck']="1";
}

$_SESSION['Cart']=1;
$_SESSION['singleShop']=0;
              $panier=new PanierC();

              $listeproduits  =$panier->afficherProduits();
              $total=0;
              foreach ($listeproduits as $p ) {

 if(isset($_POST['qte'.$p['ID_PRO']]))
                          {
                            if($_POST['qte'.$p['ID_PRO']]>0)
                            {
                              $panier1=new Panier($p['ID_PRO'],$_POST['qte'.$p['ID_PRO']],0);
                              $panier1C=new PanierC();
                              if($panier1C->CheckQte($panier1)==true)
                              {
                                 $panier->updateQte($p['ID_PRO'],$_POST['qte'.$p['ID_PRO']]);
                                  $_SESSION['qteCheck']="true";
                              }
                              else {
                                $_SESSION['qteCheck']="false";

                              }


                            }

                           }
                         }

?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post" action="cart.php">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                       <?php
             $panier=new PanierC();

              $listeproduits  =$panier->afficherProduits();
              $total=0;

              foreach ($listeproduits as $p ) {

                if(isset($_POST['qte'.$p['ID_PRO']]))
                                         {
                                           if($_POST['qte'.$p['ID_PRO']]>0)
                                           {
                                             $panier1=new Panier($p['ID_PRO'],$_POST['qte'.$p['ID_PRO']],0);
                                             $panier1C=new PanierC();
                                             if($panier1C->CheckQte($panier1)==true)
                                             {
                                                $panier->updateQte($p['ID_PRO'],$_POST['qte'.$p['ID_PRO']]);
                                                 $_SESSION['qteCheck']="true";
                                             }
                                             else {
                                               $_SESSION['qteCheck']="false";
                                             //  break;
                                             }


                                           }

                                          }




                ?>
                  <tr>

                    <td class="product-thumbnail">
                      <!-- <img src="<?php// echo $p['ID_PRO']; ?>.jpg" alt="Image" class="img-fluid"> -->
                      <figure class="block-4-image">
                          <a><div class="zoom"><?php
                              $id =$p['ID_PRO'];
                              $db = mysqli_connect("localhost","root","","projet"); //keep your db name
                              $sql = "SELECT * FROM produit where id =$id ";
                                        $sql1= "SELECT * FROM reduction where idProduit=$id";
                                        $sth = $db->query($sql);
                                        $sth1 = $db->query($sql1);
                                        $result=mysqli_fetch_array($sth);
                                        $result1=mysqli_fetch_array($sth1);

                              echo '<img width="150" height="150" src="data:image/jpeg;base64,'.base64_encode( $p['image'] ).'"/>';
                              ?></a>
                            </figure>



                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $p['nom']; ?></h2>
                    </td>
                    <td>
                       <?php foreach ($sth1 as $row) {}?>
                                        <?php
                                        if(mysqli_affected_rows($db)!=0)
                                        {?>
                                         <p><?php echo $p['prix']-($p['prix']*$row['tauxReduction'])/100; ?> DT</p>

                                        <?php }else{?>
                                        <p><?php echo $p['prix']; ?>DT</p>
                                       <?php }
                                        ?>

                    </td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 150px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text"  name="qte<?php echo $p['ID_PRO'] ?>" id="qteC" class="form-control text-center" value="<?php echo $p['QTE']; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                      <?php
                      if($_SESSION['qteCheck']=="false")
                      {
                      echo'<p style ="color : red"><strong>*Quantite indisponible ! </strong></p>';
                      $_SESSION['qteCheck']="true";
                    }
                     ?>




                    </td>
                    <td>
                       <?php foreach ($sth1 as $row) {}?>
                                        <?php
                                        if(mysqli_affected_rows($db)!=0)
                                        {?>
                                         <p><?php  $total+=($p['prix']-($p['prix']*$row['tauxReduction'])/100)*$p['QTE'];echo ($p['prix']-($p['prix']*$row['tauxReduction'])/100)*$p['QTE']; ?> DT</p>

                                        <?php }else{?>
                                        <p><?php  $total+=$p['prix']*$p['QTE'];echo $p['prix']*$p['QTE']; ?> DT</p>
                                       <?php }
                                        ?>


                    </td>
                    <td><a href="cart.php?del=<?php echo $p['ID_PRO']; ?>" class="btn btn-primary btn-sm">X</a></td>

                  </tr>
                     <?php
                       }
                        ?>
                </tbody>
              </table>
            </div>

        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <div>

                  <?php
                  if($_SESSION['qteCheck']=="false")
                  {
                  echo'<p style ="color : red"><strong>*Quantite indisponible ! </strong></p>';
                  $_SESSION['qteCheck']="true";
                }
                 ?>
                </div>
                <button type="submit" class="btn btn-primary btn-sm btn-block">Update Cart</button>
</form>
              </div>
              <div class="col-md-6">
              </div>
            </div>

          </div>

          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>

                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo $total;?> DT</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <?php
                    if($total > 0)
                    {

                      $_SESSION['total']=$total;
                      ?>
                      <button class="btn btn-primary btn-lg py-3 btn-block"  onclick="window.location='checkout.php'">Proceed To Checkout</button>
                   <?php
                    }

                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php require 'footer.php';?>
