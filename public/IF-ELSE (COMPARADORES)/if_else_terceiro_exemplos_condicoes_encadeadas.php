<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-else</title>
</head>

<body>
    <?php
    $usuario_possui_cartao_loja = true;
    $valor_compra = 400;
    $valor_frete = 50;
    $recebeu_deconto_frete = true;


    if ($usuario_possui_cartao_loja  && $valor_compra >= 400) {
        $valor_frete = 0;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 300) {
        $valor_frete = 10;
    } elseif ($usuario_possui_cartao_loja && $valor_frete >= 200) {
        $valor_frete = 25;
    } else {
        $recebeu_deconto_frete = false;
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


    <p>Valor do frente é de : <?= $valor_frete ?></p>
</body>

</html>