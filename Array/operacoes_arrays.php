<div class="titulo">Operações com Arrays</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28,
];

$dados2 = [ 
    "nome" => "Maria",// se eu colocar outra sentença o que sobrepõe é a primeira informada na 16 "$dadosCompletos = > $dados1 < -"
    "naturalidade" => "Fortaleza",

];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // VERIFICA SE É OU NÃO UMA ARRAY
echo '<br>' . count($dadosCompletos); // CONTA A QUANTIDADE DE ELEMNTOS DENTRO DE SUAS FUNÇÕES

echo '<br>';
$indice = array_rand($dadosCompletos); // pegar array aleatóriamente de forma randômica
echo "$indice = $dadosCompletos[$indice]";
echo '<br>' . "{$dadosCompletos['idade']}";
echo '<br>' . "${dadosCompletos['idade']}"; // interpola mesmo com o par de chaves por dentro
echo '<br>';

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // retirar toda a função da tela
echo '<br>';
// var_dump($dadosCompletos); // verificar a função (resultado NULL)

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // faz a junção, tomando cuidado pra não sobrescrever os valores
echo '<br>';

print_r($decimais); 
echo'<br>';

$decimais = array_merge($pares, $impares); // juntar valores de 2 arrays
echo '<br>';
print_r($decimais);

sort($decimais); // ordenar e organizar grupo de sentenças
echo '<br>';
print_r($decimais);

