<?php

// utilizamos para fazer um controle de qualidade nas classes
interface Database
{
    public function listarProduto();
    public function adicionarProduto();
    public function alterarProduto();

}

class MysqlDB implements Database
{
    public function listarProduto()
    {

    }
    public function adicionarProduto()
    {
        echo "Adicionar com Mysql";
    }
    public function alterarProduto()
    {

    }
}
class OracleDB implements Database
{
    public function listarProduto()
    {

    }
    public function adicionarProduto()
    {
        echo "Adicionar com oracle";
    }
    public function alterarProduto()
    {

    }

}

class MongoDB implements Database
{
    public function listarProduto()
    {

    }
    public function adicionarProduto()
    {
        echo "Adicionar com Mongo";
    }
    public function alterarProduto()
    {

    }

}

$db = new MysqlDB();
$db->adicionarProduto();
