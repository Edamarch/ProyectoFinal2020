<?php 

include 'cplantilla.php';
include '../cnn.php';




$query="SELECT * FROM clientes";
$resultado=$conn->query($query);

$pdf = new PDF('L', 'mm', array(250,450));
//array =150 tamaño de arriba abajo
//array = 300 tamaño de izquierda a derecha
//$pdf->set_paper('letter','landscape');

$pdf->SetMargins(20, 12 , 0);
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFillColor(232,232,232);
//$pdf->SetFillColor( 3, 39, 151 );
//$pdf->SetTextColor( 255,255,255);
$pdf->SetFont('Arial','B',18);


$pdf->Cell(170,10,'NIT',1,0,'C',1);
$pdf->Cell(80,10,'NOMBRE',1,0,'C',1);
$pdf->Cell(80,10,'APELLIDO',1,0,'C',1);
$pdf->Cell(80,10,'ESTADO',1,1,'C',1);
//$pdf->Cell(80,10,'FECHA VENCIMIENTO',1,1,'C',1);
//$pdf->Cell(40,6,'FECHA APROBADO',1,0,'C',1);
//$pdf->Cell(30,6,'PAIS',1,0,'C',1);
//$pdf->Cell(15,6,'DIAS',1,1,'C',1);






$pdf->SetFont('Arial','',18);
while ($row=$resultado->fetch_assoc()) {


$pdf->Cell(170,10,utf8_decode($row['nit']),1,0,'C');
$pdf->Cell(80,10,$row['nombre'],1,0,'C');
//$pdf->Cell(30,6,utf8_decode($row['fabricante']),1,0,'C');
$pdf->Cell(80,10,$row['apellido'],1,0,'C');
$pdf->Cell(80,10,$row['cestado'],1,1,'C');
//$pdf->Cell(40,6,$row['fechaob'],1,0,'C');
//$pdf->Cell(30,6,$row['pais'],1,0,'C');
//$pdf->Cell(15,6,$row['Dias'],1,1,'C');

}

$pdf->Output();
mysqli_close( $conn );


 ?>
 