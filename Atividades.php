<!--Atividades-->

<?php
////1. Criar função que recebe uma quantidade variável de palavras no formato de string e devolve uma frase como uma única string contatenando as palavras;
function exibirFrase(string $saudacao, string $dia): void
{
    // É melhor retornar uma string e exibir chamando a função para poder reutilizá-la mais vezes.
    echo $saudacao . " hoje é " . $dia . PHP_EOL;
}

// Retornando string daria um echo aqui
exibirFrase('Bom dia', 'quarta-feira');

//2. Criar função que recebe uma quantidade variável de números no formato de integer e devolve a multiplicação desse números;
// String não é possível fazer foreach, teria que quebrá-la numa array
// variável resultados não é necessária ter enviado, poderia ter inicializado na função
function multiplicacao($numeros, $resultado)
{
    // Está dando erro, para corrigir é necessário fazer um explode (função que transforma uma string em um array a partir de um ponto de quebra - delimitador)
    $numerosArray = explode(',', $numeros);

    foreach ($numerosArray as $numero) {
        // O resultado está sempre sendo sobrescrito. A multiplicação do enunciado está incorreta
        $resultado = $numero * $numero;
    }
    echo "O resultado da multiplicação é " . $resultado . PHP_EOL;
}

multiplicacao('1,3', '3');

// Exercício corrigido
function multiplicacaoCorrigida(int ...$numeros): string
{
    $resultado = 1;
    foreach ($numeros as $numero) {
        // Isso seria a mesma coisa de $resultado = $resultado * $numero
        $resultado *= $numero;
    }

    return "O resultado da multiplicação é " . $resultado . PHP_EOL;
}

echo multiplicacaoCorrigida(1, 3);

// 3. Criar função que recebe um array associativo e retorna a key do valor mais alto;
// Não está utilizando os números enviados, que deve ser array. Poderia ser (int ...$numeros) para enviar uma array só de int
function numeroMaior(array $numeros): void
{
    // já está vindo pr parâmetro, não é necessário definir
//    $numeros = [
//        'numero1' => 2,
//        'numero2' => 5,
//        'numero3' => 8
//    ];
    echo "O valor mais alto é de " . max($numeros) . ". " . PHP_EOL;
}
// Corrigido para enviar array
numeroMaior([2,5,8]);

//4. Criar função que recebe um array_associativo com os pares 'nome' => idade e devolve o próprio array, mas retirando os pares onde a idade é menor que 18

$idades = array(
    'Ana' => 16,
    'Pedro' => 19,
    'Joao' => 12,
);
// É possível exibir o nome também pegando o valor da chave
foreach ($idades as $nome => $idade) {
    // estava mantendo os pares. Precisa manter os maiores de 18
    if ((($idade % 2) != 0 && ($idade < 18)) || $idade >= 18) {
        echo "$nome tem $idade anos" . PHP_EOL;
    }
}
