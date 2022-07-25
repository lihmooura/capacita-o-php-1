<!--Desafio
Um médico irá realizar a um procedimento de doação de rins.
O paciente em questão tem 3 candidatos para a cirurgia.
Os dados são os seguintes

Paciente Nome completo: Lohane Vêkanandre Sthephany Smith Bueno de HA HA HA de Raio Laser bala de Icekiss
Gênero: Feminino
Idade: 21
Tipo sanguíneo: A+
Peso: 71kg Altura: 172cm

Candidato 1 Nome completo: Carlos Rato Roberto Massa Júnior
Gênero: Masculino
Idade: 22
Tipo sanguíneo: AB+
Peso: 72kg Altura: 175cm

Candidato 2 Nome completo: Kassandra Portadora da Águia
Gênero: Feminino
Idade: 22
Tipo sanguíneo: O+
Peso: 67kg Altura: 160cm

Candidato 3 Nome completo: Arthur Morgan
Gênero: Masculino
Idade: 17
Tipo sanguíneo: O-
Peso: 80kg Altura: 159cm

Faça um sistema PHP que:
- Calcule o IMC de ambos
- Se um deles estiver obeso ou abaixo do peso, não será possível realizar o procedimento
- Compare a idade de ambos - Só poderão ser aceitos pacientes maiores de idade
- Compare o tipo sanguíneo - Só poderão realizar o procedimento caso o tipo sanguíneo seja compatível
- Exiba as informações de todos os candidatos, motivos pelos quais foram aprovados e reprovados.-->
<?php
$paciente = [
        'nome' => 'Lohane Vêkanandre Sthephany Smith Bueno de HA HA HA de Raio Laser bala de Icekiss',
        'gênero' => 'Feminino',
        'idade' => 21,
        'tipoSanguineo' => 'A+',
        'peso' => 71,
        'altura' => 1.72
];

$Candidatos = [
    'Candidato1' => [
        'nome' => 'Carlos Rato Roberto Massa Júnior',
        'gênero' => 'Masculino',
        'idade' => 22,
        'tipoSanguineo' => 'AB+',
        'peso' => 72,
        'altura' => 1.75
    ],
     'Candidato2' => [
        'nome' => 'Kassandra Portadora da Águia',
        'gênero' => 'Feminino',
        'idade' => 22,
        'tipoSanguineo' => 'O+',
        'peso' => 67,
        'altura' => 1.60
    ],
    'Candiadato3' => [
        'nome' => 'Arthur Morgan',
        'gênero' => 'Masculino',
        'idade' => 17,
        'tipoSanguineo' => 'O-',
        'peso' => 80,
        'altura' => 1.59
    ],
];

$imc = $paciente['peso']/($paciente['altura'] * $paciente['altura']);
echo "Resultado do IMC do paciente é: $imc" . PHP_EOL;

foreach ($Candidatos as  $candidato) {
    ['peso' => $peso, 'altura' => $altura, 'nome' => $nome] = $candidato;
    $imc = $candidato['peso'] / ($candidato['altura'] ** 2);

    echo "Resultado do IMC do $nome é: $imc. Sendo assim está ";

    // Poderia ser feito um switch case, mas if também funciona
    if ($imc < 18) {
        echo "abaixo do recomendado" . PHP_EOL;
    } else if ($imc < 24) {
        echo "dentro do recomendado" . PHP_EOL;
    } else {
        // Sobrepeso não é obesidade, teria que ter mais uma condição
        echo "acima do recomendado" . PHP_EOL;
    }

}

foreach ($Candidatos as $candidato) {
    ['nome' => $nome, 'idade' => $idade] = $candidato;
    if($idade < 18) {
        echo "$nome não possui idade minima de 18 anos para realizar o procedimento." . PHP_EOL;
    } else {
        echo "$nome possui idade minima de 18 anos e está apto para participar do procedimento." . PHP_EOL;
    }
}

// Caso precisasse mudar o paciente, e assim o tipo sanguineo, não seria possível reutilizar essa parte d código sem ajuste de dev
$tipoSanguineoCompativel = ['O+', 'O-', 'A+', 'A-'];
foreach ($Candidatos as $candidato) {
    ['nome' => $nome, 'tipoSanguineo' => $tipoSanguineo] = $candidato;
    if (in_array($tipoSanguineo, $tipoSanguineoCompativel)) {
        echo "$nome é compatível com o tipo sanguíneo do paciente." . PHP_EOL;
    } else {
        echo "$nome não é compatível com o tipo sanguíneo do paciente." . PHP_EOL;
    }
}
