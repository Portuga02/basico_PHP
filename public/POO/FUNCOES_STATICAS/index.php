<?php
require('classMatematica.php');
// função statica -> serve para acionar o metodo da classe sem precisar instaciar a mesma

echo matematica::$nome . "<br>" . " Quantidade de operações  " . matematica::$int . "<br>"; // chamando  uma propriedade;
echo "<br>";
echo "<br>";


echo "A soma dos valores é " . matematica::somar(20, 30, 40) . "<br>";  // chamando o metodo da classe


echo "A divisão destes numeros são..." . matematica::dividir(10, 43, 22) . "<br>";


echo "A multiplicação destes numeros são..." . matematica::multiplicar(10, 43, 22) . "<br>";

echo "A subração  destes numeros são..." . matematica::subtrair(10, 43, 22) . "<br>";
