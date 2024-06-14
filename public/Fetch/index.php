<?php

/** TIPO DE CONEXÃO SIMPLES PARA CONEXÃO DE DADOS  COM O PDO */
$usuario = 'root';
$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$senha = ''; /*Alterando senha de acordo com o sistma ou servidor que você utiliza*/

/* COLOCANDO ERROS DE ExEÇÃO PDOExcepton*/
try {
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = 'SELECT * FROM tb_usuarios WHERE id = 6';

    $statmement = $conexao->query($query);
    $lista = $statmement->fetch(PDO::FETCH_ASSOC); // retorna todos os registro da consulta selecionado

    echo "<pre>";
    var_dump($lista);
    echo "</pre>";
} catch (PDOException $e) { // utilizaado no php 7
    echo 'Error de conexão:  ' . $e->getCode() . 'Messagem :' . $e->getMessage();
}

// PDO::FETCH_COLUMN   utilizado pra manipular o PDO  e acordo com a necessidade da  pessoa, LEMBRANDO QUE EXISTE VARIOS TIPOSS
// FETCCH --> UTILIZADO PARA RETORNAR APENAS 1 DADO
