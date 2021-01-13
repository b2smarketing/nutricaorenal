<?php
include $_SERVER['DOCUMENT_ROOT']."/wp-config.php";

$velho = $_POST['velho'];
$codigo = $_POST['codigo'];
$vencimento = $_POST['vencimento'];

$conexao = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sql = "select entry_id from wp_wpforms_entries where fields like '%$velho%'";

$consulta = $conexao->query($sql);

$resultado = array();
foreach($consulta as $row){
 $resultado[] = $row;
}
echo $resultado[0]['entry_id'];


