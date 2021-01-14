<?php

function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

// NOVA DATA
$ano = date('Y');
$mes = date('m');
if ($mes == '02') {
    $dia = '28';
} elseif ($mes == '04' || $mes == '06' || $mes == '09' || $mes == '11') {
    $dia = '30';
} else {
    $dia = '31';
}
$novavalidade = $ano . "-" . $mes . "-" . $dia;

$hoje = date('Y-m-d');
$codigo = $_POST['codigo'];
$validade = inverteData($_POST['validade']);
$usuario = $_POST['usuario'];

if (strtotime($validade) >= strtotime($hoje)) {
    echo "<span class='erro'>Erro, esse Cupom ainda está na validade !</span>";
}else{

    include $_SERVER['DOCUMENT_ROOT'] . "/wp-config.php";

    $conexao = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $sql = "select id,codigo from wp_codigos where usuario = ''";

    $consulta = $conexao->query($sql);

    $resultado = array();
    foreach ($consulta as $row) {
        $resultado[] = $row;
    }
    if ($resultado != null) {
        $id_codigo = $resultado[0]['id'];
        $sql2 = "update wp_codigos set usuario = '$usuario', validade = '$novavalidade' where id = '$id_codigo'";
        $consulta = $conexao->query($sql2);
        if ($consulta) {
            echo "Cupom Gerado com Sucesso !<br>Novo Cupom: ".$resultado[0]['codigo'];
        } else {
            echo "ERRO ao inserir";
        }
    }
}
