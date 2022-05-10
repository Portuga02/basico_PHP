<?php

class criacaoLikes
{
    //Criação da classe

    public $likes = 0;
    /* criação dos metodos da classe */
    public $comentarios = [];
    public $author;

    public function __construct()
    {
        echo 'teste';
    }

    public function aumentarLikes()
    {

        echo 'abc';
        // assim se cira um metodo
        $this->likes++;
    }
}

$post = new criacaoLikes();
// chamando e instanciando classe

$post2 = new criacaoLikes();

// para chamar um metodo criado no sistema se faz

$post1->aumentarLikes();
// dessa forma é chamado o metodo que está acima

echo 'POST1 ' . $post1->likes . '<br>';
