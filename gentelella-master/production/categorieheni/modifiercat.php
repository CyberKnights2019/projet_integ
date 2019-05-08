<?php
//start session
session_start();

//including the database connection file
include_once('../Product/Crud.php');

//getting the id
$id = $_GET['id'];

$crud = new Crud();

if(isset($_POST['edit'])) {
    $nom = $crud->escape_string($_POST['nom']);


    //update data
    $sql = "UPDATE categorie SET nom_categorie = '$nom' WHERE id_cat = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'categorie updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update categorie';
    }

    header('location: affichercategorie.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: affichercategorie.php');
}
?>