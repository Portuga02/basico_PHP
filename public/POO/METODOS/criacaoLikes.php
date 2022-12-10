<?php

class criacaoLikes
{
    //Criação da classe
    // as propriedades são as que são do tipo publica e privada essas coisas
    public $likes = 0;
    /* criação dos metodos da classe */

    public $comentarios = [];
    public $author;

    public function __construct()
    {
        echo 'teste';
    }

    public function aumentarLikes()   // o nome da função é o metodo propriamente dito
    {

        echo 'abc';
       
        $this->likes++;   // utilizo o this para acessar o meu proprio metodo
    }
}

$post = new criacaoLikes();
// chamando e instanciando classe

$post2 = new criacaoLikes();

// para chamar um metodo criado no sistema se faz

$post1->aumentarLikes();
// dessa forma é chamado o metodo que está acima

echo 'POST1 ' . $post1->likes . '<br>';
