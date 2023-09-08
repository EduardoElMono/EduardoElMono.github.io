<?php
require('C:/Xampp/htdocs/Mi Empresa/PDFCreator/fpdf185/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
$pageWidth = $this->GetPageWidth();
$pageHeight = $this->GetPageHeight();
$pad=$_POST["padrino"];
$ahijado=$_POST["ahijado"];
$historial=$_POST["historial"];
$gustos=$_POST["qlgusta"];
$tmpimagen=($_FILES["imagen"]["tmp_name"]);
//$img = isset($_POST["imagen"]) ? $_POST["imagen"] : "";


$imageWidth = $pageWidth;
$imageHeight = $pageHeight; 

       

    $this->Image('fondo.jpg', 0, 0, $imageWidth, $imageHeight);// (x, y, width, height)

    //if (!empty($tmpimagen) && file_exists($tmpimagen)) {
    // Obtener la extensión de la imagen
    //$extension = pathinfo($tmpimagen, PATHINFO_EXTENSION);

    // Verificar si la extensión es compatible (JPEG, PNG o GIF)
        //if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif'))) {
        $this->Image($tmpimagen, 19.3, 153.7, 45.9, 71.8, 'jpg');// (x, y, width, height)
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
    $this->Cell(65,410,$ahijado,0,0, 'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(195,190,'Historial',0,0, 'C');
    // Salto de línea
    $this->Ln(20);

     $this->SetFont('Arial','B',12);
    $this->Cell(322,150,utf8_decode('¿Que me Gusta?'),0,0, 'C');
    // Salto de línea
    $this->Ln(20);
//---------------------------------------------------------
    $this->SetY(-125);
    $this->Cell(75.27);
    // Longitud máxima de cada fragmento de texto
    $maxLength = 1000; // Cambia este valor según tus necesidades
    // Dividir el texto en fragmentos más pequeños
    $historial = wordwrap($historial, $maxLength, "\n", true);
    $historialArray = explode("\n", $historial);

    // Iterar a través de los fragmentos y agregarlos al PDF
    foreach ($historialArray as $fragment) {
    $this->SetFont('Arial', 'B', 10);
    $this->MultiCell(45.58, 7, utf8_decode($fragment), 0, 'C');
}
//-----------------------------------------------------------
    $this->SetY(-117);
    $this->Cell(138.2);
    // Longitud máxima de cada fragmento de texto
    $maxLength = 1000; // Cambia este valor según tus necesidades

    // Dividir el texto en fragmentos más pequeños
    $gustos = wordwrap($gustos, $maxLength, "\n", true);
    $gustosArray = explode("\n", $gustos);

    // Iterar a través de los fragmentos y agregarlos al PDF
    foreach ($gustosArray as $fragment) {
    $this->SetFont('Arial', 'B', 10);
    $this->MultiCell(45.58, 5, utf8_decode($fragment), 0, 'C');
}

    
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