<?php

// Função para calcular a sequência de Fibonacci até o N-ésimo termo
function fibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// Número de termos na sequência de Fibonacci
$n = 10;

// Chamada da função e exibição do resultado
echo "A sequência de Fibonacci até o $n-ésimo termo é: ";
echo implode(", ", fibonacci($n));

?>
