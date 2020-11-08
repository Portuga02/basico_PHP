<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $usuario_possui_cartao_loja = true;

    $valor_compra = 225;

    $valor_frete = 50;

    $recebeu_deconto_frete = false;


    if ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
        $valor_frete = 0;

        $recebeu_deconto_frete = true;
    }


    ?>
    <h1>Detalhes do pedido</h1>


    <p>Possui catão da loja</p>

    <?php
    if ($usuario_possui_cartao_loja = true) {
        echo 'Sim!!!';
    } else {
        echo 'Não!!!';
    }

    ?>

    <p>Valor da compra é de <?= $valor_compra ?></p>


    <p>Recebeu desconto no frete?</p>

    <?php

    if ($recebeu_deconto_frete = true) {
        echo 'Sim!!!';
    } else {
        echo 'Não!!!';
    }
    ?>


    <p>Valor da compra é de <?= $valor_frete ?></p>
</body>

</html>