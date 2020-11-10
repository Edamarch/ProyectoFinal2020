<?php 
require '../cnn.php';
require'fpdf/fpdf.php';

class PDF extends FPDF{


function Header(){
		//Insertar Imagen en PDF.
		$this->Image('../img/logoph.png', 45,5, 55);
		//Insertar fuente diferente.
		$this->SetFont('Arial','B',15);
		//Para espaciar las celdas del titulo.
		$this->Cell(30);//Se ajusta al tamaño de lo que se le asigna a la imagen.
		//Iniciamos la celda del pdf. era 460
		$this->Cell(360,35,'REPORTE DE CLIENTES',0,0,'C');
		$this->Image('../img/usac.png', 380,5, 35);
		//Salto de Linea
		$this->Ln(30);

		}

		function Footer()
		{
			//Inicia el pie de página
			$this->SetY(-15);
			//Cambio de fuente.
			$this->SetFont('Arial','I',8);
			//El número de página que va creando el PDF.

			$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');



		}


}



 ?>