<?php

/** TIPO DE CONEXÃO SIMPLES PARA CONEXÃO DE DADOS  COM O PDO */
$usuario = 'root';
$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$senha = ''; /*Alterando senha de acordo com o sistma ou servidor que você utiliza*/

/* COLOCANDO ERROS DE ExEÇÃO PDOExcepton*/
try {
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = '  CREATE TABLE tb_usuarios(
                id INT not null primary key auto_increment,
                nome varchar (50) not null,
                email varchar (100) not null,
                senha varchar (32) not null
        )
        
       ';

    $tableContadores = '  CREATE TABLE tb_contadores (
                id_SETOR INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                setor  VARCHAR(30) NOT NULL,
                localizacao VARCHAR(30) NOT NULL,
                email_trabalho VARCHAR(33) NOT NULL,
                Localizacao_trabalho Varchar(22) NOT NULL
            );
       ';
    $inserir_Dados = '    INSERT INTO  tb_usuarios (nome, email, senha) 
    VALUES("Sávio Gomes da Silva", "faculdade@alpha.com", "102010")';
    // $retornar = $conexao->exec($query);
    // $retornar  = $conexao->exec($tableContadores);   // FUNÇÃO EXEC --> UTILIZAAD PARA CRIAR TABELAS UTILIZANDO O CODIGO PHP
    $retornar = $conexao->exec($inserir_Dados);
    echo $retornar;
} catch (PDOException $e) { // utilizaado no php 7
    echo 'Error de conexão:  ' . $e->getCode() . 'Messagem :' . $e->getMessage();
}
