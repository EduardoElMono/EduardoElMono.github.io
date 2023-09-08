<?php
require('C:/Xampp/htdocs/PDFCreator/fpdf185/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
$pageWidth = $this->GetPageWidth();
$pageHeight = $this->GetPageHeight();
$pad=$_POST["padrino"];
$ahijado=$_POST["ahijado"];
$ahijado2=$_POST["ahijado2"];

$tmpimagen=($_FILES["imagen"]["tmp_name"]);
$tmpimagen2=($_FILES["imagen2"]["tmp_name"]);



$imageWidth = $pageWidth;
$imageHeight = $pageHeight; 

       

    $this->Image('fondo2.jpg', 0, 0, $imageWidth, $imageHeight);// (x, y, width, height)

    $this->Image($tmpimagen, 43.78, 159.85, 37.5, 59.5, 'jpg');// (x, y, width, height)
    $this->Image($tmpimagen2, 118.28, 159.85, 37.5, 59.15, 'jpg');// (x, y, width, height)

    // Arial bold 15
    $this->AddFont('Qimaky', '', 'Qimaky.php');
    
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->SetFont('Qimaky','',38);
    $this->Cell(30,183,$pad,0,0,'C');

    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(105,230,utf8_decode($ahijado),0,0, 'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(255,190,utf8_decode($ahijado2),0,0, 'C');
    // Salto de línea
    $this->Ln(20);

    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Qimaky','',8);
    // Número de página
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Qimaky','',12);
$pdf->Output();

include("conexion.php");
//require('C:/Xampp/htdocs/PDFCreator/fpdf185/fpdf.php');

//$query="INSERT INTO AHIJADOS (padrino,ahijado) VALUES('$pad', $ahijado')";
//$res=sqlsrv_prepare($con, $query);
?>