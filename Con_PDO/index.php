<?php

/** TIPO DE CONEXÃO SIMPLES PARA CONEXÃO DE DADOS  COM O PDO */


$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = "root";
$senha = ""; /*Alterando senha de acordo com o sistma ou servidor que você utiliza*/

$conexao = new PDO($dsn, $usuario, $senha);


/* COLOCANDO ERROS DE ExEÇÃO PDOExcepton*/
try {
    $conexao = new PDO($dsn, $usuario, $senha);
    if ($conexao == true) {

        echo "Conexão estabelecida com sucesso ao banco de dados";
    }
} catch (PDOException $th) { // utilizaado no php 7
    echo 'Error de conexão:  ' . $th->getCode() . 'Messagem :' . $th->getMessage();
}
