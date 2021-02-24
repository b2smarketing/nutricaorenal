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

$cpf = $_POST['cpf'];

include $_SERVER['DOCUMENT_ROOT']."/wp-config.php";

$conexao = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sql = "select id from wp_codigos where cpf = ''";

$consulta = $conexao->query($sql);

$resultado = array();
foreach ($consulta as $row) {
	$resultado[] = $row;
}
if($resultado != null){
    $id_codigo = $resultado[0]['id'];
    $sql2 = "update wp_codigos set cpf = '$cpf', validade = '$validade' where id = '$id_codigo'";
    $consulta = $conexao->query($sql2);
    if($consulta){
        echo "Inserido OK";
    }else{
        echo "ERRO ao inserir";
    }
}

