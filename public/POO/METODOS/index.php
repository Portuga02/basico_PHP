<?php
include "../METODOS/criacaoLikes.php";
$post = new criacaoLikes();
// chamando e instanciando classe

$post2 = new criacaoLikes();

// para chamar um metodo criado no sistema se faz

$post1->aumentarLikes();
// dessa forma é chamado o metodo que está acima

echo 'POST1 ' . $post1->likes . '<br>';
