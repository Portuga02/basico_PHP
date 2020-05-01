<?php

/** TIPO DE CONEXÃO SIMPLES PARA CONEXÃO DE DADOS  COM O PDO */


$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = "root";
$senha = ""; /*Alterando senha de acordo com o sistma ou servidor que você utiliza*/

$conexao = new PDO($dsn, $usuario, $senha);
