<?php
//start session
session_start();

//including the database connection file
include_once('D:/programs/wamp64/www/Projet_integre1/gentelella-master/production/Product/Crud.php');

//getting the id
$id = $_GET['id'];

$crud = new Crud();

if(isset($_POST['edit'])) {
    $nom = $crud->escape_string($_POST['nom']);
    $avism = $crud->escape_string($_POST['avism']);


    //update data
    $sql = "UPDATE avis SET nom = '$nom',avis='$avism'  WHERE id_avis = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'avis updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update avis';
    }

    header('location: afficheravis.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: afficheravis.php');
}
?>