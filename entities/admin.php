<?php
class admin
{
private $id;
private $pseudoA;
private $emailA;
private $mdpA;

function __construct($id,$pseudoA,$emailA,$mdpA)
{
	$this->id=$id;
	$this->pseudoA=$pseudoA;
	$this->emailA=$emailA;
	$this->mdpA=$mdpA;


}
function getid(){return $this->id;}
function setid($id) {$this->id=$id;}

function getPseudoA(){return $this->pseudoA;}
function setPseudoA($pseudoA) {$this->pseudoA=$pseudoA;}

function getEmailA(){return $this->emailA;}
function setEmailA($emailA) {$this->emailA=$emailA;}

function getMdpA(){return $this->mdpA;}
function setMdpA($mdpA){$this->mdpA=$mdpA;}


}
?>
