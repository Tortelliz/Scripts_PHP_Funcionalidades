<?php

// Função para calcular o fatorial de um número
function calcularFatorial($numero) {
    if ($numero < 0) {
        return "O fatorial de números negativos não é definido.";
    } elseif ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

// Número para calcular o fatorial
$numero = 5;

// Chamada da função e exibição do resultado
echo "O fatorial de $numero é: " . calcularFatorial($numero);

?>
