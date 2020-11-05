<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções</title>
</head>

<body>
    <?php
    // encapsular o bloco de códigos com um objetivos definido

    /*
os parametros são utilizados como entrada de dados para função

// lembrar de sempre chamar a função

*/

 
    function exibirBoasVindas()
    {
        echo 'Bem vindo ao curso de PHP';
    }

    exibirBoasVindas();

    function calcularArea($largura, $comprimento)
    {
        $area=    $largura * $comprimento;
        return $area;
    }

    
    ?>
</body>

</html>