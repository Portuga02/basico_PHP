<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <?php
    // encapsular o bloco de códigos com um objetivos definido
    /*
     *os parametros são utilizados como entrada de dados para função
    * lembrar de sempre chamar a função
    */
    function exibirBoasVindas()
    {
        echo 'Bem vindo ao curso de PHP';
    }

    exibirBoasVindas();

    function calcularArea($largura, $comprimento)
    {
        $area =    $largura * $comprimento;
        return $area;
    }
    echo '<br>';
    echo calcularArea(30, 50); // ,quando se chama uma função deve-se passar parametros dentro dela
    echo '<br>';
    echo   calcularArea(30, 22); // posso chamar quantas vezes forem necessário as funções
    echo '<br>';
    $retorno = calcularArea(30, 88); // existe duas manerias de se dar retorno em uma função, por meio de echo ou por meio de uma variavel PHP como esta em questão
    echo $retorno;

    /* QUANDO DEVO UTILIZAR OS RETORNOS COM OU SEM VARIAVEL DE RETORNO
    
    SEM VARIAVEL DE RETORNO --> 

    */

    ?>
</body>

</html>