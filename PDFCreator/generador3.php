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
$ahijado3=$_POST["ahijado3"];
$tmpimagen=($_FILES["imagen"]["tmp_name"]);
$tmpimagen2=($_FILES["imagen2"]["tmp_name"]);
$tmpimagen3=($_FILES["imagen3"]["tmp_name"]);
//$img = isset($_POST["imagen"]) ? $_POST["imagen"] : "";


$imageWidth = $pageWidth;
$imageHeight = $pageHeight; 

       

    $this->Image('fondo.jpg', 0, 0, $imageWidth, $imageHeight);// (x, y, width, height)

    //if (!empty($tmpimagen) && file_exists($tmpimagen)) {
    // Obtener la extensión de la imagen
    //$extension = pathinfo($tmpimagen, PATHINFO_EXTENSION);

    // Verificar si la extensión es compatible (JPEG, PNG o GIF)
        //if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif'))) {
        $this->Image($tmpimagen, 19.4, 153.7, 46, 71.8, 'jpg');// (x, y, width, height)
        $this->Image($tmpimagen2, 85.7, 153.9, 46, 71.8, 'jpg');// (x, y, width, height)
        $this->Image($tmpimagen3, 147.89, 153.9, 47, 71.8, 'jpg');// (x, y, width, height)
   // }
//}
    // Arial bold 15
    $this->AddFont('Qimaky', '', 'Qimaky.php');
    
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->SetFont('Qimaky','',38);
    $this->Cell(30,183,$pad,0,0,'C');

    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(65,230,$ahijado,0,0, 'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(195,190,$ahijado2,0,0, 'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(322,150,$ahijado3,0,0, 'C');
    // Salto de línea
    $this->Ln(20);
//---------------------------------------------------------
}
//---------------------------------------------------------
    
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