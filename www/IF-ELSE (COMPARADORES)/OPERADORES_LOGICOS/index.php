<?php

//E :&&  retorna verdadeiro se todas as expressoes forem verdadeiras 
// OU : || OU OR -> retorna verdadeiro se pelo menos um dos resultados da expresões for verdadeiro
// XOR -> RETORNA VERDADEIRO SE UMA DAS EXPRESSOES FOREM VERDADEIRA E A OUTRA FALSA
// ! = negação, ele o resultado retornado pela expressao
// com () para estabelecer preferencias 

// com o operadore &&
if (3 == 3 && 10 > 3) {
    echo ' esta expressão é Verdadeira';
} else {
    echo 'esta expressão é Falsa';
}

// com o operador || 
if (4 == 4 || 10 > 15) {
    echo ' esta expressão é Verdadeira';
} else {
    echo 'esta expressão é Falsa';
}


// COM O OPERADOR XOR

if (4 == 4 xor 10 > 15) {
    echo ' esta expressão é Verdadeira';
} else {
    echo 'esta expressão é Falsa';
}


// com o operador de negação


if (!('a ' == 'b')) {
    echo ' esta expressão é Verdadeira';
} else {
    echo 'esta expressão é Falsa';
}


// ordem de precedencia

if ((22 == 22 && 3 == 3) || 5 != 5) {
    echo 'Verdadeiro';
} else {

    echo 'Falso';
}
