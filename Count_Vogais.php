<?php

// Função para contar o número de vogais em uma string
function contarVogais($string) {
    // Converte a string para minúsculas para facilitar a contagem
    $string = strtolower($string);
    // Define um array com as vogais
    $vogais = array('a', 'e', 'i', 'o', 'u');
    // Inicializa a contagem de vogais
    $contador = 0;
    // Itera sobre cada caractere da string
    for ($i = 0; $i < strlen($string); $i++) {
        // Verifica se o caractere atual é uma vogal
        if (in_array($string[$i], $vogais)) {
            $contador++;
        }
    }
    return $contador;
}

// String para teste
$string = "Esta é uma frase de exemplo";

// Chamada da função e exibição do resultado
echo "O número de vogais na string é: " . contarVogais($string);

?>
