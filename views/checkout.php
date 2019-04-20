<?php 
 session_start();
require 'header.php';

?>


    <div class="bg-light py-3">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
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
          
            <form class="col-md-12" method="post" action="ajoutCmd.php">
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
                        $total=$panier->Total();
                        $_SESSION['total']=$total;
               
                        foreach ($listeproduits as $p ) { 


                ?>  

                      <tr>
                        <td><?php echo $p['nom']; ?><strong class="mx-2">X</strong><?php echo $p['QTE'];?></td>
                               <td><?php echo $p['prix']*$p['QTE']; ?> DT</td>

                      </tr>
                    <?php
                  }
                  ?>
                     
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong><?php echo $total;?></strong> DT</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Livraison</h3>
                <label for="s_sm" class="d-flex">
                  <input  type="radio"  onclick="myFunction()" name="livraison" value="Boutique" id="s_sm" class="mr-2 mt-1" > <span class="text-black">Boutique</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="livraison" value="Livraison à domicile" id="s_md" class="mr-2 mt-1" onclick="myFunction()"> <span class="text-black">Livraison à domicile</span>

                </label>


         <div class="form-group">
                <label style="display:none" id="zonecHH" for="c_country" class="text-black">Zone <span class="text-danger">*</span></label>
                <select name="zoneCH" id="c_country" class="form-control" style="display:none" >
                  <option value="Ariana">Ariana</option>    
                  <option value="Grand Tunis">Grand Tunis</option>    
                  <option value="Bizerte">Bizerte</option>    
                  <option value="Nabeul">Nabeul</option>    
                  <option value="Sousse">Sousse</option>    
                  <option value="Mahdia">Mahdia</option>    
                  <option value="Kerkennah">Kerkennah</option>    
                  <option value="Grombalia">Grombalia</option>    
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
