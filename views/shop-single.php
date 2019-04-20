<?php 
 session_start();

require 'header.php';
if(isset($_GET['id']))
{
  $id=$_GET['id'];
 $produit=new Produit();
 $prod=$produit->afficherProd($id);
 $_SESSION['id_pro'] = $id;
 $_SESSION['Cart']=0;
$_SESSION['singleShop']=1;


}

?>

    <div class="site-section">
      <div class="container">
        <div class="row">
            <?php foreach ($prod as $p ) {  ?>

          <div class="col-md-6">
            <img src="<?php echo $p['ID_PRO']; ?>.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $p['nom']; ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
            <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>
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
                   <input  type="submit" class="buy-now btn btn-sm btn-primary"   name="ajouter" value="Ajouter" > 

            </div>

                <p><a href="shop.php" class="buy-now btn btn-sm btn-primary">Shop</a></p>
    
            </form>
          </div>
        </div>
      </div>
    </div>

   <?php require 'footer.php';?>
