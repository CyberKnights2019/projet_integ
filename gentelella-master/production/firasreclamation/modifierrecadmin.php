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
    $reclamationf = $crud->escape_string($_POST['reclamationn']);
    $reponse = $crud->escape_string($_POST['reponse']);


    //update data
    $sql = "UPDATE reclamation SET nom = '$nom',reclamationf='$reclamationf',reponse='$reponse'  WHERE id_reclamation = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'reclamation updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update reclamation';
    }

    header('location: afficherreclamationadmin.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: afficherreclamationadmin.php');
}
?>