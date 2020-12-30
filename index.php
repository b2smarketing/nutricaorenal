<?php

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

$pathcontador = 'wp-content/themes/nutricao-renal/codigo/contador.txt';

function ler($path)
{
    $arquivo = fopen($path, 'r');
    $linha = fgets($arquivo);   
    fclose($arquivo);
    return $linha;
}
function escrever($path, $texto, $modo)
{
    $arquivo = fopen($path, $modo);
    fwrite($arquivo, $texto);
    fclose($arquivo);
}

if ($_SERVER['REQUEST_URI'] == "/programa-de-apoio-ao-paciente/"){
$n = (int) ler($pathcontador);
$n++;
escrever($pathcontador, $n, 'w');
session_start();
$_SESSION['codigo'] = $n;
echo $_SESSION['codigo'];
}
