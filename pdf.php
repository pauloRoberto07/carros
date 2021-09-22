<?php
include("./Classes/conexao.php");

$link = mysqli_connect("localhost","root","","bdcarro");



$html= '<table border=0';
$html.= '<thead>';
$html.= '<tr>';
$html.= '<td>ID: </td>';
$html.= '<td>Nome do Carro: </td>';
$html.= '<td>Cor do Carro: </td>';
$html.= '<td>Marca do Carro: </td>';
$html.= '<td>Vel. Max. do Carro: </td>'; 
$html.='</tr>';
$html.= '</thead>';


$resultado_carro = mysqli_query($link, "select * from tbcarro");
while($row_carro = mysqli_fetch_assoc($resultado_carro)) {
    $html.= '<tbody>';
    $html.= '<tr><td>'.$row_carro['idCarro']. "</td>";
    $html.= '<td>'.$row_carro['nomeCarro']. "</td>";
    $html.= '<td>'.$row_carro['marcaCarro']. "</td>";
    $html.= '<td>'.$row_carro['corCarro']. "</td>";
    $html.= '<td>'.$row_carro['velMaxCarro']." KM/H" ."</td></tr>";
    $html.= '</tbody>';
}

$html.= '</table';



use Dompdf\Dompdf;

//include autoloader
require_once("dompdf/autoload.inc.php");

//criando a instancia
$dompdf = new DOMPDF();

$dompdf->load_html('<h1> Carros Cadastrados </h1>
    '.$html.'

');

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("teste".rand(10,1000).".pdf", array("Attachment" => false));



?>