<?php

// Função para calcular o máximo e mínimo de um array
function calcularMaximoMinimo($array) {
    // Verifica se o array está vazio
    if (empty($array)) {
        return "O array está vazio.";
    }
    
    $maximo = max($array); // Calcula o máximo do array
    $minimo = min($array); // Calcula o mínimo do array

    return array('maximo' => $maximo, 'minimo' => $minimo); // Retorna um array associativo com o máximo e mínimo
}

// Array para teste
$array = array(3, 7, 2, 8, 1, 5);

// Chamada da função e exibição do resultado
$resultado = calcularMaximoMinimo($array);
echo "O máximo do array é: " . $resultado['maximo'] . PHP_EOL;
echo "O mínimo do array é: " . $resultado['minimo'];

?>
