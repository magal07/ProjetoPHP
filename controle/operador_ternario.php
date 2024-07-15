<div class="titulo">Operador Ternário</div>

<?php

$idade = 70; 
$status; 

if($idade >= 18){
    $status = "Maior de Idade!";
} else {
$status = "Menor de Idade!";
}

echo "$status<br>";

// EXEMPLO ACIMA USANDO IF/ELSE 

// EXEMPLO ABAIXO USANDO O OPERADOR TERNÁRIO, O OPERADOR EXIGE QUE 
// USE APÓS A EXPRESSÃO O (?) E ('') DIVIDINDO OS RESULTADOS COM (:)

$idade = 17;

$status = $idade >=18 ? 'Maior de Idade' : 'Menor de Idade';

echo "$status<br>"; 

$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de Idade' : 'Menor de Idade!';

echo "$status<br>"; 