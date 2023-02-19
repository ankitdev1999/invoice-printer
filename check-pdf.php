<?php
require "fpdf/fpdf.php";

 class pdf extends FPDF {

  }

$pdf = new pdf("P","mm",'A4');
$pdf->AddPage();;

$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,'Hello World!');
$pdf->Cell(100,10,'Hello World!');
$pdf->Output();
?>