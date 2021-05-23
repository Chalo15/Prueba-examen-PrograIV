<?php 
require 'fpdf/fpdf.php';

class PDF extends FPDF

    {

        function Header()

        {

            $this->SetFillColor(193, 195, 203);

            $this->SetXY(0,0);

            $this->Cell(250,15,'',0,0,'C',1);




            $this->Image('img/logo.jpg', 5, 16, 50 );

            $this->SetFont('Arial','B',17);

            $this->Cell(30);

            $this->SetXY(50,5);

            $this->Cell(120,7, 'Facturacion Buses San Marino',1,0,'C');



            $this->Ln(20);

        }

        

        function Footer()

        {

            $this->SetY(-15);

            $this->SetFont('Arial','I', 8);

            $this->Image('img/qr.jpg', 150, 240, 50 );

            $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );

        }       

    }
?>