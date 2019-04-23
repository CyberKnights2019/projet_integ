<?php
define("LOCAL", "http://localhost");

$environment = LOCAL;
?>

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/AdminNada/afficherClient.php"><i class="fa fa-laptop"></i> Clients' List  </a></li>
            <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/AdminNada/afficherAdmin.php"><i class="fa fa-laptop"></i> Admins' List  </a></li>
            <li>
                <a><i class="fa fa-table"></i> Commande <span class="fa fa-chevron-down"></span></a>

                <ul class="nav child_menu">

                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/tables_dynamic.php">Liste De Commande</a></li>


                </ul>
            </li>


            <li>
                <a><i class="fa fa-automobile"></i> Livraison <span class="fa fa-chevron-down"></span></a>

                <ul class="nav child_menu">

                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/Ajout_Livreur.php">Ajout d'un livreur</a></li>
                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/Afficher_livreur.php">Gestion de livreurs</a></li>
                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/liv_commande.php">Gestion de bons de livraison</a></li>
                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/stat_bon.php">Statistiques</a></li>


                </ul>
            </li>
            <li>
                <a><i class="fa fa-cart-arrow-down"></i> Produit <span class="fa fa-chevron-down"></span></a>

                <ul class="nav child_menu">

                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/Product/formulaire_produit.php">Ajout d'un produit</a></li>
                    <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/Product/afficherproduit.php">Gestion des produits</a></li>


                </ul>
            </li>

            <!-- Menu reduction-->
      <li><a><i class="fa fa-percent"></i>Gestion des reductions <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/ajoutReduction.php">Ajouter Reduction</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/modifierReduction.php">Modifier Reduction</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/supprimerReduction.php">Supprimer Reduction</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/AfficherReduction.php">Afficher les Reduction</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/rechrcherreduction.php">rechercher  les Reduction</a></li>
        </ul>
      </li>
      <!-- FIN Menu reduction-->
       <!-- Menu Client Fidele-->
      <li><a><i class="fa fa-user"></i>Gestion des Clients Fideles <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/ajoutclientfideles.php">Ajouter Clients Fidele</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/modifierclientfideles.php">Modifier Clients Fidele</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/supprimerclientfideles.php">Supprimer Clients Fidele</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/Afficherclientfideles.php">Afficher les Clients Fidele</a></li>
          <li><a href="<?php echo $environment; ?>/Projet_integre/gentelella-master/production/rechrcherclientfideles.php">rechercher les Clients Fidele</a></li>
        </ul>
      </li>
      <!-- FIN Menu Client Fidele-->


        </ul>
    </div>


</div>
<!-- /sidebar menu -->
