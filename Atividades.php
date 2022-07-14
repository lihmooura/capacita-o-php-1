<!--Atividades-->

<?php
////1. Criar função que recebe uma quantidade variável de palavras no formato de string e devolve uma frase como uma única string contatenando as palavras;
function exibirFrase($saudacao, $dia) {
echo $saudacao . " hoje é ".$dia . PHP_EOL;
}

exibirFrase('Bom dia', 'quarta-feira');

//2. Criar função que recebe uma quantidade variável de números no formato de integer e devolve a multiplicação desse números;
function multiplicacao($numeros, $resultado)
{
    foreach ($numeros as $numero)
    $resultado = $numero * $numero;
    echo "O resultado da multiplicação é " . $resultado . PHP_EOL;
}

multiplicacao('1, 3', '3');

// 3. Criar função que recebe um array associativo e retorna a key do valor mais alto;
function numeroMaior($numeros) {
$numeros = [
        'numero1' => 2,
        'numero2' => 5,
        'numero3' => 8
];
 echo "O valor mais alto é de " . max($numeros) . ". " . PHP_EOL;
}
numeroMaior('2,5,8');

//4. Criar função que recebe um array_associativo com os pares 'nome' => idade e devolve o próprio array, mas retirando os pares onde a idade é menor que 18

$idades = array(
        'Ana' => 16,
        'Pedro' => 19,
        'Joao' => 12,
);
    foreach ($idades as $item) {
    if ($item % 2 == 0 && ($item < 18))
        echo $item. PHP_EOL;
}



