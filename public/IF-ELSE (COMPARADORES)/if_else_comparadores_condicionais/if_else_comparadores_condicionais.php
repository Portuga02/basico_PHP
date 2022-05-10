<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-else</title>
</head>

<body>
    <?php
    /*EXEMPLOS DE IF ELSE*/

    //ESTRUTURA DE CONTROLE PARA CRIAR VERIFICAÇÕES PARA AS POSSIBILIDADES

    // == igual
    if (2  == 2) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }
    echo "<br>";
    echo "<hr/>";

    // operador identico
    if (2 === '2') {
        echo 'é identico';
    } else {
        echo 'não é identico';
    }
    echo "<br>";
    echo "<hr/>";

    // diferente != ou <>
    if ('x' != 'y') {
        echo 'X é diferente de Y';
    } else {
        echo 'X não é diferente de Y';
    }
    echo '<br/>';
    echo "<hr/>";
    if (5  <> 6) {
        echo ' 5 é diferente de 6 ';
    } else {
        echo '5 não é diferente de 6';
    }
    echo '<br/>';
    echo "<hr/>";

    // !== não identico

    if (5 !== '6') {
        echo ' Verdadeiro!';
    } else {
        echo 'Falso';
    }

    echo '<br/>';
    echo "<hr/>";


    // < sinal e menor
    if (18 < 20) {
        echo ' é menor ';
    } else {
        echo 'não é menor';
    }
    echo '<br/>';
    echo "<hr/>";

    // > sinal e menor
    if (18 > 20) {
        echo ' é menor ';
    } else {
        echo 'não é menor';
    }
    echo '<br/>';
    echo "<hr/>";


    //<= menor igual

    if (25 <= 30) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }
    echo '<br/>';
    echo "<hr/>";


    //>= maior igual

    if (25 >= 30) {
        echo 'verdadeiro';
    } else {

        echo 'falso';
    }




    ?>
</body>

</html>