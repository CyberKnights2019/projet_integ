<?php

require 'header.php';
include "D:/programs/wamp64/www/Projet_integre1/entities/Produitheni.php";
include "D:/programs/wamp64/www/Projet_integre1/core/ProduitService.php";
include "D:/programs/wamp64/www/Projet_integre1/core/CategorieService.php";
include "D:/programs/wamp64/www/Projet_integre1/entities/CategorieHeni.php";
?>



<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-2">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                        <div class="d-flex">
                            <div class="dropdown mr-1 ml-md-auto">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Latest
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">Men</a>
                                    <a class="dropdown-item" href="#">Women</a>
                                    <a class="dropdown-item" href="#">Children</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                    <a class="dropdown-item" href="#">Relevance</a>
                                    <a class="dropdown-item" href="#">Name, A to Z</a>
                                    <a class="dropdown-item" href="#">Name, Z to A</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Price, low to high</a>
                                    <a class="dropdown-item" href="#">Price, high to low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php
                    if(isset($_GET['idcategorie'])) {
                        $id = $_GET['idcategorie'];
                        $produit = new ProduitService();
                        $prod = $produit->afficherparcategorie($id);

                        foreach ($prod as $p) {
                            ?>


                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a>
                                            <div class="zoom"><?php
                                            $id = $p['id'];
                                            $db = mysqli_connect("localhost", "root", "", "projet"); //keep your db name
                                            $sql = "SELECT * FROM produit where id =$id ";
                                            $sth = $db->query($sql);
                                            $result = mysqli_fetch_array($sth);
                                            echo '<img width="150" height="150" src="data:image/jpeg;base64,' . base64_encode($p['image']) . '"/>';
                                            ?></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3>
                                            <a href="plusdetails.php?id=<?php echo $p['id']; ?>"><?php echo $p['nom']; ?> </a>
                                        </h3>
                                        <p class="mb-0">click pour plus de details</p>
                                        <p class="text-primary font-weight-bold"><?php echo $p['prix']; ?> DT</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                    <?php
                    if(isset($_GET['idmarque'])) {
                        $id = $_GET['idmarque'];
                        $produit = new ProduitService();
                        $prod = $produit->afficherparmarque($id);

                        foreach ($prod as $p) {
                            ?>


                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a>
                                            <div class="zoom"><?php
                                            $id = $p['id'];
                                            $db = mysqli_connect("localhost", "root", "", "projet"); //keep your db name
                                            $sql = "SELECT * FROM produit where id =$id ";
                                            $sth = $db->query($sql);
                                            $result = mysqli_fetch_array($sth);
                                            echo '<img width="150" height="150" src="data:image/jpeg;base64,' . base64_encode($p['image']) . '"/>';
                                            ?></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3>
                                            <a href="plusdetails.php?id=<?php echo $p['id']; ?>"><?php echo $p['nom']; ?> </a>
                                        </h3>
                                        <p class="mb-0">click pour plus de details</p>
                                        <p class="text-primary font-weight-bold"><?php echo $p['prix']; ?> DT</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>



                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="shopheni.php" class="d-flex"><span>tous les categories </span> <span class="text-black ml-auto"></span></a></li>

                        <?php
                        $CategorieService1 = new CategorieService();
                        $listecategorie=$CategorieService1->afficherCategorie();

                        foreach ($listecategorie as  $row) {
                        ?>
                        <tr>
                            <li class="mb-1"><a href="rechercherparcategorie.php?idcategorie=<?php echo $row['nom_categorie'];?>" class="d-flex"><span><?php echo $row['nom_categorie']; ?></span> <span class="text-black ml-auto"></span></a></li>
                            <?php
                            }
                            ?>
                    </ul>
                </div>

                <div class="border p-4 rounded mb-4">
                    <div class="mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                        <div id="slider-range" class="border-primary"></div>
                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                    </div>



                    <div class="border p-4 rounded mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Marque</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a href="shopheni.php" class="d-flex"><span>tous les marques </span> <span class="text-black ml-auto"></span></a></li>

                            <?php
                            $listeproduits=new ProduitService();
                            $listeproduits  =$listeproduits->afficherproduit();;

                            foreach ($listeproduits as  $row) {
                            ?>
                            <tr>
                                <li class="mb-1"><a href="rechercherparcategorie.php?idmarque=<?php echo $row['marque'];?>" class="d-flex"><span><?php echo $row['marque']; ?></span> <span class="text-black ml-auto"></span></a></li>
                                <?php
                                }
                                ?>
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="site-section site-blocks-2">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-7 site-section-heading pt-4">
                            <h2>Categories</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                            <a class="block-2-item" href="#">
                                <figure class="image">
                                    <img src="images/women.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Women</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <a class="block-2-item" href="#">
                                <figure class="image">
                                    <img src="images/children.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Children</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                            <a class="block-2-item" href="#">
                                <figure class="image">
                                    <img src="images/men.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Men</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<?php require 'footer.php';?>
