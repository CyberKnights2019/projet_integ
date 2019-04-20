<?php
class livreur{
private $cinL;
private $nomL;
private $prenomL;
private $adresseL;
private $mailL;
private $telL;
private $img;
function __construct($cinL,$nomL,$prenomL,$telL,$mailL,$adresseL,$img){
		$this->cinL=$cinL;
		$this->nomL=$nomL;
		$this->prenomL=$prenomL;
		$this->adresseL=$adresseL;
		$this->mailL=$mailL;
    $this->telL=$telL;
		$this->img=$img;
	}

	function getImg()
	{
	  return $this->img;
	}

function getCin()
{
  return $this->cinL;
}

function setCin($cinL)
{
		$this->cinL=$cinL;
}

function getNom()
{
  return $this->nomL;
}

function setNom($nomL)
{
		$this->nomL=$nomL;
}

function getTel()
{
  return $this->telL;
}

function setTel($telL)
{
		$this->telL=$telL;
}

function getMail()
{
  return $this->mailL;
}

function setMail($mailL)
{
		$this->mailL=$mailL;
}

function getPrenom()
{
  return $this->prenomL;
}

function setPrenom($prenomL)
{
		$this->prenomL=$prenomL;
}

function getAdresse()
{
  return $this->adresseL;
}

function setAdresse($adresseL)
{
		$this->adresseL=$adresseL;
}

}
 ?>
