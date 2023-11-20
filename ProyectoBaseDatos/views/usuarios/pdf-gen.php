<?php
require('fpdf.php');
error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];
if($actualsesion == null || $actualsesion == ''){

    echo 'acceso denegado';
    die();
}

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Inventario',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this -> Cell(40,7, 'Nombre', 1, 0, 'C', 0);
    $this -> Cell(50,7, 'Descripcion', 1, 0, 'C', 0);
    $this -> Cell(50,7, 'Numero Serie', 1, 0, 'C', 0);
    $this -> Cell(20,7, 'Categorias', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',4);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';

$consulta = "SELECT * FROM productos";
$res = $mysqli -> query($consulta);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial',"",8);

while($row  = $res -> fetch_assoc()){
    $pdf -> Cell(40,7, $row['nombre'], 1, 0, 'C', 0);
    $pdf -> Cell(50,7, $row['descripcion'], 1, 0, 'C', 0);
    $pdf -> Cell(50,7, $row['n_serie'], 1, 0, 'C', 0);
    $pdf -> Cell(20,7, $row['categorias'], 1, 1, 'C', 0);

}
$pdf->Output();
?>