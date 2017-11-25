<?php
require('/fpdf/fpdf.php');

class PDF extends FPDF
{
     	 function Header()
   {
      $this->Image('imagenes/logoutzac.png',15,10,25);
      $this->Image('imagenes/logobiblio.png',160,10,35);
	  $this->SetFont('Arial','B',12); 
	  $this->SetXY(75,10);
	  $this->cell(50,8,'Universidad Tecnologica del Estado de Zacatecas',0,1,'C');
	   $this->SetXY(75,18);
	  $this->cell(50,8,'Biblioteca',0,1,'C');
	   $this->SetXY(75,26);
	  $this->cell(50,8,'Ficha de Prestamo',0,1,'C');
   }
}
 $id_usuario=$_GET['id_usuario'];
 $id_libro=$_GET['id_libro'];
 include('conexion.php');
 $consulta="Select * from usuario inner join prestamo inner join libro inner join autor inner join editorial on usuario.id_usuario=prestamo.id_usuario and prestamo.id_libro=libro.id_libro and libro.id_autor=autor.id_autor and libro.id_editorial=editorial.id_editorial where prestamo.id_usuario like '$id_usuario' And prestamo.id_libro like '$id_libro'";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
    $pdf = new PDF();
    $pdf->AddPage('L', 'A5'); 
    $pdf->SetFont('Arial','',10); 
	$pdf->SetXY(5,40);
	$pdf->cell(50,6,'Fecha de Solicitud:',0,0,'R');
	$pdf->cell(40,6,$lista['fecha_presatamo'],1,0,'L');
	$pdf->cell(40,6,'Fecha de Entrega:',0,0,'R');
	$pdf->cell(40,6,$lista['fecha_entrega'],1,0,'L');
	$pdf->SetXY(17,50);
	$pdf->cell(48,6,'Nombre de Usuario:',1,0,'C');
	$pdf->cell(130,6,$lista['nombre'],1,0,'L');
	$pdf->SetXY(45,50);
	$pdf->cell(80,6,$lista['apellidos'],0,0,'R');
	$pdf->SetXY(17,56);
	$pdf->cell(48,6,'Matricula:',1,0,'C');
	$pdf->cell(48,6,$lista['matricula'],1,0,'C');
	$pdf->cell(30,6,'Correo:',1,0,'C');
	$pdf->cell(52,6,$lista['correo'],1,0,'C');
	$pdf->SetXY(17,62);
	$pdf->cell(178,6,'Informacion del Material',0,0,'C');
	$pdf->SetXY(17,68);
	$pdf->cell(48,6,'Titulo:',1,0,'C');
	$pdf->cell(130,6,$lista['titulo'],1,0,'C');
	$pdf->SetXY(17,74);
	$pdf->cell(48,6,'Autor:',1,0,'C');
	$pdf->cell(130,6,'',1,0,'L');
	$pdf->SetXY(70,74);
	$pdf->cell(20,6,$lista['nombre_autor'],0,0,'R');
	$pdf->cell(50,6,$lista['apellido_autor'],0,0,'L');
	$pdf->cell(20,6,'Editorial:',1,0,'C');
	$pdf->cell(20,6,$lista['nombre_editorial'],0,0,'C');
	$pdf->SetXY(17,80);
	$pdf->cell(178,6,'',0,0,'C');
	$pdf->SetXY(17,86);
	$pdf->cell(60,40,'',1,0,'C');
	$pdf->cell(59,40,'',1,0,'C');
	$pdf->cell(59,40,'Sello',1,0,'C');
	$pdf->SetXY(81,91);
	$pdf->cell(50,6,'_________________',0,0,'C');
	$pdf->SetXY(81,97);
	$pdf->cell(50,6,'Firma de Usuario',8,0,'C');
	$pdf->SetXY(81,105);
	$pdf->cell(50,6,'_________________',0,0,'C');
	$pdf->SetXY(81,111);
	$pdf->cell(50,6,'Firma de Biblioteca',0,0,'C');
    $pdf->Output(); 
}
?>