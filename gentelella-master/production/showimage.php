<?php

$link=mysqli_connect("127.0.0.1","root","","projet");

if(isset($_GET['id']))
{
	$id = mysqli_real_escape_string($link,$_GET['id']);
	$query = mysqli_query($link,"SELECT * FROM `livreur` WHERE `cin`='$id'");
	while($row = mysqli_fetch_assoc($query))
	{
		$imageData = $row["img"];
	}
	header("content-type: image/jpeg");
	echo $imageData;
}
else
{
	echo "Error!";
}

?>
