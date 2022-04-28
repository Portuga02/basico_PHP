<?php
/*recebendo valores de nomes*/
function obterNome($nome)
{

    return "Meu nome é  ,{$nome}";
}


echo obterNome('Sávio');

/**Recebendo valores por soma simples */
function soma($a, $b)
{
    return $a + $b;
}

echo soma(10, 15);


// somas por valores predifininods
function somaDois($c, $d)
{
    $c = 10;
    $d = 20;

    echo somaDois($c, $d); /*Chamando função*/
}

/*Função de troca de valores*/

function trocarValores($a, $novoValor)
{

    $a = $novoValor;
}

$variavel = 1;

trocarValores($variavel, 3);


// trocaValor dois
function trocarValoresDOis(&$a, $novoValor)
{
    $a = $novoValor;
}
trocarValoresDOis($variavel, 5000);

echo $variavel;
