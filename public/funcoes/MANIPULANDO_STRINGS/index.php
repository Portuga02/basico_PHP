<?php
//  são funções que trabalham sobre strings para que sejam efetuado tarefas (como as funções)
echo  $texto = 'Savio gomes da silva' . '<br>';
echo "<hr/>";
echo strtolower($texto) . '<br>'; // Transforma todos os caracteres em minusculos
echo "<hr/>";
echo strtoupper($texto) . '<br>'; //  trasnforma todos os caracteres da string em maiusculo
echo "<hr/>";
echo ucfirst($texto) . '.<br>';  // trasnforma o primeiro caracter da string em maiusculo
echo "<hr/>";
echo strlen($texto) . '<br>'; // conta a quantidade de carateres de uma string
echo "<hr/>";
echo str_replace('A', 'a', $texto) . '<br>'; // substutitu uma cadeia de caracteres por outra dentro de uma string
// echo substr($texto, '',).'<br>';  // retorna parte de uma string
