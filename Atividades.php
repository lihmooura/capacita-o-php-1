<!--Atividades-->

<?php
////1. Criar função que recebe uma quantidade variável de palavras no formato de string e devolve uma frase como uma única string contatenando as palavras;
$saudacao = "Bom dia";
$dia = "quarta-feira.";
echo $saudacao . " hoje é ".$dia . PHP_EOL;

//2. Criar função que recebe uma quantidade variável de números no formato de integer e devolve a multiplicação desse números;

$numeros = [1, 3, 6];
foreach ($numeros as $numero) {
    $resultado = $numero * $numero;
}
echo "O resultado da multiplicação é " . $resultado . PHP_EOL;

// 3. Criar função que recebe um array associativo e retorna a key do valor mais alto;
$numeros = [
        'numero1' => 2,
        'numero2' => 5,
        'numero3' => 8
];
 echo "O valor mais alto é de " . max($numeros) . PHP_EOL;

//4. Criar função que recebe um array_associativo com os pares 'nome' => idade e devolve o próprio array, mas retirando os pares onde a idade é menor que 18
$idades = array(
    'Ana' => 16,
    'Joao' => 21,
    'Jose' => 12,
    'Luiz' => 22,
);

foreach ($idades as $item) {
    if ($item % 2 == 0 && ($item < 18))
        echo $item . PHP_EOL;
}



