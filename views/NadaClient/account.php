<?php
session_start();
if($_SESSION['pseudo'])
{
    header('Location:ProfilClient.php');

}
else 
{
    header('Location:inscription.php');
}

?>