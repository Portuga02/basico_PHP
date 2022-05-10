<?php

echo '<h1> EXEMPLOS PARA INGREDIENTES </h1>';
$ingredientes = [
    'feijao',
    'carne',
    'ovos',
    'cereais'
];

/*forma simples do foreach  adicionando o valor do array a variavel ingrediente*/
foreach ($ingredientes as $ingrediente) {

    echo "Item's  " . $ingrediente . '<br>';
}
echo '<pre>';
var_dump($ingredientes);
echo '</pre>';
?>

<?php
echo '' . '<br>';
/*só criei aqui para dar um espacinho*/

?>

<?php
/*nesse tipo de foreach ele pega os dados e coloca em uma chave que é a posição do array*/
/*nesse caso então teremos acesso a chave [ 0 ] ( a chave encontra-se assim );
e o valor na posição */
echo '<h1> EXEMPLOS PARA DADOS </h1>';
$dados = [
    'access',
    'sql-server',
    'postgres',
    'mysql',
    'sql-lite'
];

foreach ($dados as $key => $dado) {
    echo 'Item ' . $key . ':' . $dado . '<br>';
}
echo '<pre>';
var_dump($dados);
echo '</pre>';
?>

<?php
echo '<h1> EXEMPLOS PARA SISTEMAS OPERACIONAIS </h1>';

$SO = [
    'Windows',
    'Linux',
    'Mint',
    'Debian',
    'MC OS '
];

/* CASO SE TENHYA NECESSIDADE DE COMÇER COM O NUMERO 1 EM VEZ DO ZERO
*   IMPLEMTENTA O ( +1 ) concatenando com a variavel $key

*/
foreach ($SO as $key => $listaSO) {
    echo 'Item ' . ($key + 1) . ':' . $listaSO . '<br>';
}
echo '<pre>';
var_dump($SO);
echo '</pre>';
?>

<!-- LAÇO FOREACH

* UTILIZADO  PARA PERCORRER ARRAYS DE ITENS -->