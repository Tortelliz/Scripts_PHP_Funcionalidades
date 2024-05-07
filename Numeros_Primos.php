<?php

// Função para verificar se um número é primo
function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Função para gerar os primeiros N números primos
function gerarNumerosPrimos($quantidade) {
    $numeros_primos = array();
    $i = 2;
    while (count($numeros_primos) < $quantidade) {
        if (ehPrimo($i)) {
            $numeros_primos[] = $i;
        }
        $i++;
    }
    return $numeros_primos;
}

// Número de primos a serem gerados
$quantidade = 10;

// Chamada da função e exibição do resultado
echo "Os primeiros $quantidade números primos são: ";
echo implode(", ", gerarNumerosPrimos($quantidade));

?>
