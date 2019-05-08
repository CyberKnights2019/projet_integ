<?php

require 'header.php';

?>


    <div class="bg-light py-3">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">

          </div>
        </div>
        <div class="row">

            <form class="col-md-12" method="post" action="ajoutCmd.php" >
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                          <thead>

                            <th>Product</th>
                            <th>Total</th>
                          </thead>
                          <tbody>

                             <?php
                               $panier=new PanierC();

                              $listeproduits  =$panier->afficherProduits();
                     $a=0;
                     $totalF=0;
                     $totalD=$panier->Total();
                     $total=$_SESSION['total'];
                              foreach ($listeproduits as $p ) {


                              /*
                              if($p['QTE']>=500 && $p['prix']*$p['QTE']>=5000 ){
                                  $total=$total-($total*50)/100;


                              }

                               if($p['QTE']>=500 && $p['prix']*$p['QTE']<5000 ){
                                $total=$total-($total*20)/100;


                              }

                               if($p['QTE']<500 && $p['prix']*$p['QTE']>=5000 ){
                                $total=$total-($total*20)/100;


                              }*/
                        /*      $tSans=0;
                              $t=0;
                              if(isset($_SESSION['total']))
                              $total=$_SESSION['total'];
                            /*  else
                              $_SESSION['total']=$total;*/

                              $id =$p['ID_PRO'];
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

                            <tr>
                            <?php if($p['QTE']>=500 && $p['prix']*$p['QTE']>=5000 ){  $a=1;  ?>
                              <td><?php echo $p['nom'] ; ?></td>
                              <td><?php echo ($p['prix']*$p['QTE']-($p['prix']*$p['QTE']*50)/100); ?> DT <p>Remise Special<small> -50%</small></p></td>

                              <?php $reduction=50; $total=($p['prix']*$p['QTE']-($p['prix']*$p['QTE']*50)/100) ?>
                              <?php $totalF+=$total;



                            } else if($p['QTE']>=500 && $p['prix']*$p['QTE']<5000 ){  $a=1;  ?>
                              <td><?php echo $p['nom'] ; ?> </td>
                              <td><?php echo ($p['prix']*$p['QTE']-($p['prix']*$p['QTE']*20)/100); ?> DT<p>Remise Sur Quantite <small> -20%</small></p></td>
                              <?php $reduction=20; $total=($p['prix']*$p['QTE']-($p['prix']*$p['QTE']*20)/100); ?>

                              <?php $totalF+=$total;

                            } else if($p['QTE']<500 && $p['prix']*$p['QTE']>=5000 ){ $a=1; ?>
                              <td><?php echo $p['nom'] ; ?></td>
                              <td><?php echo ($p['prix']*$p['QTE']-($p['prix']*$p['QTE']*20)/100); ?> DT<p>Remise sur Prix<small> -20%</small></p></td>

                              <?php $reduction=20; $total=($p['prix']*$p['QTE']-($p['prix']*$p['QTE']*20)/100); ?>
                              <?php $totalF+=$total;
                            } else if($p['QTE']<500 && $p['prix']*$p['QTE']<5000 ){    ?>
                              <td><?php echo $p['nom']; ?></td>
                              <td><?php echo ($p['prix']*$p['QTE']); ?> DT</td>

                              <?php
                                $totalF+=$p['prix']*$p['QTE'];
                            }?>
                            </tr>
                          <?php
                        }
                        ?>
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                              <?php if($a==0){$totalD=$_SESSION['total']; ?>
                                <td class="text-black font-weight-bold"><strong><?php echo $totalD;?> DT </td>
                              <?php }else{?>
                               <td class="text-black font-weight-bold"><strong><strike><?php echo $_SESSION['total'];?> DT </strike><br><?php echo $totalF ?></strong> DT</td>
                              <?php  $_SESSION['totalF']=$totalF;}?>

                            </tr>
                          </tbody>
                        </table>

                  <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Livraison</h3>
                <label for="s_sm" class="d-flex">
                  <input  onclick="myFunction()" type="radio" name="livraison" value="Boutique" id="s_sm" class="mr-2 mt-1" checked > <span class="text-black">Boutique</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="livraison" value="Livraison à domicile" id="s_md" class="mr-2 mt-1" onclick="myFunction()"> <span class="text-black">Livraison à domicile</span>

                </label>


         <div class="form-group">
                <label style="display:none" id="zonecHH" for="c_country" class="text-black">Zone <span class="text-danger">*</span></label>
                <select name="zoneCH" id="c_country" class="form-control" style="display:none" >
                  <option value="Ariana">Ariana</option>
                  <option value="Beja">Beja</option>
                  <option value="Ben Arous">Ben Arous</option>
                  <option value="Bizerte">Bizerte</option>
                  <option value="Gabes">Gabes</option>
                  <option value="Gafsa">Gafsa</option>
                  <option value="Jendouba">Jendouba</option>
                  <option value="Kairouan">Kairouan</option>
                  <option value="Kasserine">Kasserine</option>
                  <option value="Kebili">Kebili</option>
                  <option value="Le Kef">Le Kef</option>
                  <option value="Manubah">Manubah</option>
                  <option value="Medenine">Medenine</option>
                  <option value="Monastir">Monastir</option>
                  <option value="Sfax">Sfax</option>
                  <option value="Sidi Bou Zid">Sidi Bou Zid</option>
                  <option value="Siliana">Siliana</option>
                  <option value="Tataouine">Tataouine</option>
                  <option value="Tozeur">Tozeur</option>
                  <option value="Zaghouan">Zaghouan</option>

                  <option value="Tunis">Tunis</option>

                  <option value="Nabeul">Nabeul</option>
                  <option value="Sousse">Sousse</option>
                  <option value="Mahdia">Mahdia</option>

                  <option value="Autre">Autre</option>


                </select>
              </div>

                <br>
                    <input style="display:none" type="text" class="form-control py-3" name="adresseCheck" id="AdressecH" placeholder="Adresse" >

                 </div>


                   <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Payment</h3>
                <label for="s_sm" class="d-flex">
                  <input type="radio" name="Payment" value="Chèque" id="s_sm" class="mr-2 mt-1" checked > <span class="text-black">Chèque</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="Payment" value="Espèce" id="s_md" class="mr-2 mt-1"> <span class="text-black">Espèce</span>
                </label>

                 </div>




                  <div class="form-group">
                    <button type ="submit" class="btn btn-primary btn-lg py-3 btn-block">Place Order</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        </form>
      </div>
    </div>

<script>

  function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("s_md");
  // Get the output text
  var text = document.getElementById("c_country");
    var text2 = document.getElementById("zonecHH");

  var text1 = document.getElementById("AdressecH");
  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
    text1.style.display = "block";
    text2.style.display = "block";

  } else {
    text.style.display = "none";
    text1.style.display = "none";
    text2.style.display = "none";

  }
}

</script>
 <?php require 'footer.php';?>
