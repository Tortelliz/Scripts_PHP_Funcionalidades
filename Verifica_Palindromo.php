<?php

// Função para verificar se uma string é um palíndromo
function verificarPalindromo($string) {
    // Remove espaços em branco e converte a string para minúsculas
    $string = strtolower(str_replace(' ', '', $string));
    // Inverte a string
    $inversa = strrev($string);
    // Verifica se a string original é igual à string invertida
    if ($string == $inversa) {
        return "A string \"$string\" é um palíndromo.";
    } else {
        return "A string \"$string\" não é um palíndromo.";
    }
}

// String para teste
$string = "socorram me subi no onibus em marrocos";

// Chamada da função e exibição do resultado
echo verificarPalindromo($string);

?>
