<?php

/** TIPO DE CONEXÃO SIMPLES PARA CONEXÃO DE DADOS  COM O PDO */


$dsn = 'mysql:host=localhost;dbname=php_com_pdo'; /* tipo do drive a ser executado e o local*/
$usuario = "root"; // conexão local, nome de usuario
$senha = ""; /*Alterando senha de acordo com o sistma ou servidor que você utiliza*/

$conexao = new PDO($dsn, $usuario, $senha);  /*CHAMANDO O DRIVE PDO*/


/* COLOCANDO ERROS DE ExEÇÃO PDOExcepton*/
try {
    $conexao = new PDO($dsn, $usuario, $senha);
    if ($conexao == true) {

        echo "Conexão estabelecida com sucesso ao banco de dados";
    }
} catch (PDOException $th) { // utilizaado no php 7
    echo 'Error de conexão:  ' . $th->getCode() . 'Messagem :' . $th->getMessage();
}
