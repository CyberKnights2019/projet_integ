<?php
class bon{
private $cinL;
private $id_c;
private $date;

function __construct($cinL,$id_c,$date){
		$this->cinL=$cinL;
		$this->id_c=$id_c;
		$this->date=$date;

	}
  function getCin()
  {
    return $this->cinL;
  }

  function setCin($cinL)
  {
  		$this->cinL=$cinL;
  }
	function getIdc()
	{
	  return $this->id_c;
	}
  function setIdc($id)
  {
      $this->id_c=$id;
  }


function getDate()
{
  return $this->date;
}


function setDate($d)
{
   $this->date=$d;
}

}
 ?>
