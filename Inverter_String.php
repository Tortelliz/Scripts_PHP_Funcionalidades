<?php

// Função para inverter uma string
function inverterString($string) {
    $tamanho = strlen($string); // Obtém o tamanho da string
    $invertida = ''; // Inicializa a string invertida
    // Loop para percorrer a string de trás para frente
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $string[$i]; // Concatena cada caractere à string invertida
    }
    return $invertida; // Retorna a string invertida
}

// String para inverter
$string = "Sales Force";

// Chamada da função e exibição do resultado
echo "A palavra 'Sales Force' invertida é: " . inverterString($string);

?>
