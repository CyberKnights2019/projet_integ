<?php
include 'd:/programs/wamp64/www/Projet_integre1/core/clientC.php';

if (isset ($_POST['submitsearch']))
{
	if(isset($_POST['searchC']))
	{

		$id=$_POST['searchC'];
		header("Location: afficherClient?id=".$id);
	}

}
if(isset($_POST['submitAll']))
	{
	 header("Location: afficherClient.php");

	}

?>
