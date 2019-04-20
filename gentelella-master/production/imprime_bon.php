<?php

require('fpdf.php');
include ('font/courier.php');
$pdf = new FPDF('L','mm','A4');

$pdf->AddPage();


$pdf->AddFont('courier','','courier.php');
$pdf->AddFont('helvetica','','helvetica.php');
$pdf->AddFont('times','','times.php');


$pdf->SetFont('courier','B',24);

//image_type_to_extension
$pdf->Image('moussa.png',30,10,-300);
//
$pdf->SetY(20);

$pdf->SetX($pdf->GetPageWidth()/2-$pdf->GetStringWidth("Bon de livraison")-50);
$pdf->SetTItle("Bon de livraison");

//TITRE
//$pdf->SetDrawColor(255,0,0);//bords
//   $pdf->SetFillColor(0,230,0);//background
   $pdf->SetTextColor(0, 153, 153);//texte
$pdf->Cell(0,10,"Bon de livraison",0,1,'C',0);
//

//Contenu

$pdf->SetY(70);

$pdf->SetX(30);
$pdf->SetFont('Arial','B',18);
$pdf->SetTextColor(0, 0, 0);//texte
$pdf->Cell(0,10,"Issu le : ".date("Y/m/d"),0,0,'L',0);
$pdf->Ln();
$pdf->Ln();
  //    $w=$pdf->GetStringWidth($t);
//Tableauu
//dimension

$pdf->SetFont('Times','',18);
$a=$pdf->GetStringWidth("CIN Client")+5;
$b=$pdf->GetStringWidth("ID Commande")+5;
$c=$pdf->GetStringWidth("Date de Remise")+5;
$d=$pdf->GetStringWidth("Zone")+20;

//

$pdf->SetLineWidth(1.5);
//entetes
$pdf->SetDrawColor(255, 255, 255);
$pdf->SetTextColor(255, 255, 255);//texte
$pdf->SetFillColor(51, 102, 255);//background
$pdf->SetX(10);
$pdf->Cell($a,10,"CIN Client",1,0,'C',1);
$pdf->Cell($b,10,"ID Commande",1,0,'C',1);
$pdf->Cell($c,10,"Date de Remise",1,0,'C',1);
$pdf->Cell($d,10,"Zone",1,0,'C',1);
$pdf->Cell(0,10,"Adresse",1,1,'C',1);

//

//Contenu

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);//texte
$pdf->SetDrawColor(255, 255, 255);
$pdf->SetFillColor(234, 234, 225);
$cin=$_GET['cin'];
$idc=$_GET['idc'];
$date=$_GET['date'];
$zone=$_GET['zone'];
$nomprenom=$_GET['nomprenom'];
$adresse=$_GET['adresse'];
$pdf->SetX(10);
$pdf->Cell($a,30,$cin,1,0,'C',1);
$pdf->Cell($b,30,$idc,1,0,'C',1);
$pdf->Cell($c,30,$date,1,0,'C',1);
$pdf->Cell($d,30,$zone,1,0,'C',1);
$pdf->Cell(0,30,$adresse,1,1,'C',1);

//
$pdf->SetY(150);
$pdf->SetX(30);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(50,30,"Votre Livreur est : ",0,0,'L',0);
$pdf->SetFont('Arial','',15);
$pdf->Cell(50,30, $nomprenom,0,1,'L',0);

//


//

$pdf->Output();
?>
