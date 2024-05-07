<?php

// Função para verificar se um número é par ou ímpar
function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "$numero é um número par.";
    } else {
        return "$numero é um número ímpar.";
    }
}

// Número para testar
$numero = 10;

// Chamada da função e exibição do resultado
echo verificarParOuImpar($numero);

?>
