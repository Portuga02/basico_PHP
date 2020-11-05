<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saida de dados</title>
</head>

<body>
    <?php
    /*SAIDA DE DADOS EM PHP, OS COMANDOS REMETEM A UM RESULTADO EM TELA DO QUE SE ESTÁ RECEBENDO ME PHP
    * EM TERMOS É UM DEBUG PARA O PROPRIO PHP
     */
    echo 'Lista de dados PHP';  // UTILIZANDO O ECHO PARA RETORNAR VALORES EM STRING
    echo "<br><hr>";
    $dados = 'savio' . '<br>';   // SETADO STRING PARA VARIVAVEL E  PULANDO LINHA COM O BR
    echo "<br><hr>";
    $dadosIdade = 12;
    '<br>';

    echo $dados . $dadosIdade;  // UTILIZANDO O ECHO PARA RETORNAR VALORES DE VARIAVEIS

    print  'funcionando com print' . '<hr>' . '<br>';  //  UTILIZANDO O PRINT PARA RETORNAR VALORES DE STRING, O PRINT É UMA FUNÇÃO DA LINGAGUEM PHP , QUANDO ELA É EXECUTADA CORRETAMENTE ELA RETORNA O 1

    echo print("comando print<hr>");
    echo "<br><hr>";
    echo "<br>";
    print_r(
        $dados . '' . $dadosIdade . 'funcionando com print_r'  // UTILIZANDO O PRINT_R PARA RETORNAR VALORES DE DAS VARIAVEIS SETADAS
    );


    ?>
</body>

</html>