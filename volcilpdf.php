<?php
$diam=$_POST['diam']; 
$altu=$_POST['altu']; 
require('fpdf/fpdf.php');
$pdf = new FPDF('p');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(30, 05);
$pdf->Cell(15, 50, utf8_decode('REPORTE DE EVALUACIÓN PARCIAL'), 0 , 1); //Celda
$pdf->Ln(8); 
$pdf->SetXY(10, 60);
$pdf->SetFillColor(255,255,255); //color blanco
$pdf->SetTextColor(23,32,42); // color negro
$pdf->SetFont('Arial','B',6);
$pdf->Cell(90,5,utf8_decode('Diámetro'),1,0,'C',1);
$pdf->Cell(90,5,$diam,1,0,'C',1);
$pdf->Ln(5); 
$pdf->Cell(90,15,utf8_decode('Altura'),1,0,'C',1);
$pdf->Cell(90,15,$altu,1,0,'C',1);
$pdf->Output("calcula.pdf","F");
echo "<script language='javascript'>window.open('calcula.pdf','_blank','');</script>";
?>

