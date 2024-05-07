<?php

// Função para calcular a soma dos elementos de um array
function calcularSomaArray($array) {
    $soma = 0;
    foreach ($array as $elemento) {
        $soma += $elemento;
    }
    return $soma;
}

// Array para teste
$array = array(1, 2, 3, 4, 5);

// Chamada da função e exibição do resultado
echo "A soma dos elementos do array é: " . calcularSomaArray($array);

?>
