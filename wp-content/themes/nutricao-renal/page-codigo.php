<?php

// DATA
$ano = date('Y');
$mes = date('m');
if($mes == '02'){
	$dia = '28';
}elseif($mes == '04' || $mes == '06' || $mes == '09' || $mes == '11'){
	$dia = '30';
}else{
	$dia = '31';
}
$validade = $ano."-".$mes."-".$dia;

$usuario = $_POST['usuario'];

include $_SERVER['DOCUMENT_ROOT']."/wp-config.php";

$conexao = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sql = "select id from wp_codigos where usuario = ''";

$consulta = $conexao->query($sql);

$resultado = array();
foreach ($consulta as $row) {
	$resultado[] = $row;
}
if($resultado != null){
    $id_codigo = $resultado[0]['id'];
    $sql2 = "update wp_codigos set usuario = '$usuario', validade = '$validade' where id = '$id_codigo'";
    $consulta = $conexao->query($sql2);
    if($consulta){
        echo "Inserido OK";
    }else{
        echo "ERRO ao inserir";
    }
}

/*$sql = "select entry_id from wp_wpforms_entries where fields like '%$velho%'";

$consulta = $conexao->query($sql);

$resultado = array();
foreach($consulta as $row){
 $resultado[] = $row;
}
echo $resultado[0]['entry_id'];
*/


