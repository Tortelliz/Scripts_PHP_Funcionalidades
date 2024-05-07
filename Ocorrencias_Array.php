<?php

// Função para contar o número de ocorrências de cada elemento em um array
function contarOcorrencias($array) {
    // Inicializa um array vazio para armazenar as contagens
    $ocorrencias = array();
    
    // Loop sobre cada elemento do array
    foreach ($array as $elemento) {
        // Verifica se o elemento já existe no array de contagens
        if (isset($ocorrencias[$elemento])) {
            // Se sim, incrementa a contagem
            $ocorrencias[$elemento]++;
        } else {
            // Se não, inicializa a contagem para 1
            $ocorrencias[$elemento] = 1;
        }
    }
    
    // Retorna o array de contagens
    return $ocorrencias;
}

// Array para teste
$array = array(1, 2, 3, 4, 1, 2, 1, 3, 4, 5, 5, 5);

// Chamada da função e exibição do resultado
$resultado = contarOcorrencias($array);
foreach ($resultado as $elemento => $ocorrencias) {
    echo "O elemento $elemento ocorre $ocorrencias vez(es)" . PHP_EOL;
}

?>
