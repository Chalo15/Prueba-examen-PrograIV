<?php
session_start();
$idusua=$_SESSION['Identi'];


include 'plantilla.php';
if(isset($_GET['idr'])){

    $idruta=$_GET['idr'];
  
require '../php/connect.php';

$query = "SELECT * from usuarios where Cedula='$idusua'";
	$consulta = $mysqli->query($query);

    if($consulta->num_rows>=1){
        $fila=$consulta->fetch_array(MYSQLI_ASSOC);
        $nombre=$fila['Nombre'];
        $apellido1=$fila['Apellido1'];
        $apellido2=$fila['Apellido2'];
        $cedula=$fila['Cedula'];
        $pasaporte=$fila['Pasaporte'];
        $correo=$fila['Correo'];
       
    }

    
	$query2 = "SELECT * from factura where id_ruta='$idruta'ORDER BY num DESC";
	$consulta2 = $mysqli->query($query2);

    if($consulta2->num_rows>=1){
        $fila2=$consulta2->fetch_array(MYSQLI_ASSOC);
        
        $cantboletos=$fila2['CantidadBoletos'];
        $preciou=$fila2['Precio_unidad'];
        $total=$fila2['Precio_total'];

    }


	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	

 

	$pdf->SetFont('Arial','B',12);
    $pdf->SetXY(100,20);
	$pdf->Cell(70,6,'Buses San Marino S.A',1,1,'C',0);

    $pdf->SetXY(100,30);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Ced Juridica: ',0,0,'R',0);
    $pdf->SetFont('Arial','I',8);
	$pdf->Cell(20,5,'30024563255',0,1,'R',0);

    $pdf->SetXY(100,35);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Telefono: ',0,0,'L',0);
    $pdf->SetFont('Arial','I',8);
    $pdf->SetXY(120,35);
	$pdf->Cell(20,5,'(+506) 2210 4010',0,1,'L',0);

    $pdf->SetXY(100,40);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Direccion: ',0,0,'L',0);
    $pdf->SetXY(120,40);
    $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(40,5,'San Pedro, San Jose, Costa Rica. Edificio de Operaciones Bus-SM, Av.',0,'L',0);


    $pdf->SetFillColor(193, 195, 203);
    $pdf->SetXY(20,60);
    $pdf->Cell(150,5,'',0,0,'C',1);



    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(35,70);
	$pdf->Cell(20,6,'Cliente',0,1,'C',0);
    $pdf->Image('img/cliente.jpg', 55, 70, 5 );

    $pdf->SetXY(20,80);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Nombre: ',0,0,'C',0);
    $pdf->SetXY(20,85);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$nombre,0,'C',0);

    $pdf->SetXY(45,80);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Pri. Apellido: ',0,0,'C',0);
    $pdf->SetXY(45,85);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$apellido1,0,'C',0);

    $pdf->SetXY(70,80);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Seg.Apellido: ',0,0,'C',0);
    $pdf->SetXY(70,85);
    $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(20,5,$apellido2,0,'C',0);

    $pdf->SetXY(95,80);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Cedula: ',0,0,'C',0);
    $pdf->SetXY(95,85);
    $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(20,5,$cedula,0,'C',0);

    $pdf->SetXY(120,80);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Pasaporte: ',0,0,'C',0);
    $pdf->SetXY(120,85);
     $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(20,5,$pasaporte,0,'C',0);

    $pdf->SetXY(145,80);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Correo: ',0,0,'C',0);
    $pdf->SetXY(145,85);
     $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(20,5,$correo,0,'C',0);


    
    $pdf->SetXY(20,95);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Pago: ',0,0,'C',0);
    $pdf->SetXY(30,95);
     $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(40,5,'Tarjeta de Socio',0,'C',0);

    $pdf->SetXY(20,100);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(20,5,'Moneda: ',0,0,'C',0);
    $pdf->SetXY(30,100);
     $pdf->SetFont('Arial','I',8);
    $pdf->MultiCell(40,5,'Dolares',0,'C',0);
 


    $pdf->SetFillColor(193, 195, 203 );
    $pdf->SetXY(20,113);
    $pdf->Cell(150,5,'',0,0,'C',1);


    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(35,125);
	$pdf->Cell(20,6,'Articulo',0,1,'C',0);
    $pdf->Image('img/item.jpg', 55, 125, 5 );

  
    $pdf->SetXY(20,135);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Codigo:',0,0,'L',0);
    $pdf->SetXY(20,140);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5, $idruta,0,'L',0);
   
    $pdf->SetXY(45,135);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Cabys:',0,0,'C',0);
    $pdf->SetXY(45,140);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,'31513551653',0,'C',0);

    $pdf->SetXY(70,135);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Descripcion:',0,0,'C',0);
    $pdf->SetXY(70,140);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,'Boleto de autobus (INDIVIDUAL)',0,'L',0);

    $pdf->SetXY(100,135);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Cantidad:',0,0,'C',0);
    $pdf->SetXY(100,140);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$cantboletos,0,'C',0);

    $pdf->SetXY(125,135);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'% Descuento',0,0,'C',0);
    $pdf->SetXY(125,140);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,'0%',0,'C',0);

    $pdf->SetXY(150,135);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Precio U.',0,0,'C',0);
    $pdf->SetXY(150,140);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$preciou,0,'L',0);

    $subtotal=$preciou*$cantboletos;

    $pdf->SetXY(125,150);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'SubTotal:',0,0,'C',0);
    $pdf->SetXY(150,150);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$subtotal,0,'L',0);



    $pdf->SetFillColor(193, 195, 203);
    $pdf->SetXY(20,175);
    $pdf->Cell(150,5,'',0,0,'C',1);



    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(35,190);
	$pdf->Cell(20,6,'Monto',0,1,'C',0);
    $pdf->Image('img/factura.jpg', 55, 190, 5 );


    
    $pdf->SetXY(20,200);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Precio U:',0,0,'C',0);
    $pdf->SetXY(45,200);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$preciou,0,'C',0);

    $pdf->SetXY(20,205);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'% Descuento: ',0,0,'C',0);
    $pdf->SetXY(45,205);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,'0%',0,'C',0);
    

    $pdf->SetXY(20,210);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'SubTotal:',0,0,'C',0);
    $pdf->SetXY(45,210);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$subtotal,0,'C',0);

    
    $pdf->SetXY(20,215);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'% Impuesto:',0,0,'C',0);
    $pdf->SetXY(45,215);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,'13%',0,'C',0);

    $pdf->SetFillColor(0, 0, 0);
    $pdf->SetXY(20,227);
	$pdf->Cell(90,0.2,'',0,0,'C',1);

    $pdf->SetXY(20,230);
    $pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Total:',0,0,'C',0);
    $pdf->SetXY(45,230);
    $pdf->SetFont('Arial','I',8);
	$pdf->MultiCell(20,5,$total,0,'C',0);


   

	$pdf->Output();
}
else{

    echo"No se pudo generar la factura";
}
?>