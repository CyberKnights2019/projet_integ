<?php
class client
{
private $pseudo;
private $email;
private $motdepasse;

function __construct($pseudo,$email,$motdepasse)
{
	$this->pseudo=$pseudo;
	$this->email=$email;
	$this->motdepasse=$motdepasse;


}
function getPseudo(){return $this->pseudo;}
function setPseudo($pseudo) {$this->pseudo=$pseudo;}

function getEmail(){return $this->email;}
function setEmail($email) {$this->email=$email;}

function getMotdepasse(){return $this->motdepasse;}
function setMotdepasse($motdepasse){$this->motdepasse=$motdepasse;}


}
?>
