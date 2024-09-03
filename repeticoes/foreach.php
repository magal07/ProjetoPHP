<div class="titulo"><h3>Foreach</h3></div>

<?php

$array = [
 1 => 'Domingo',
         'Segunda',
         'Terça',
         'Quarta',
         'Quinta',
         'Sexta',
         'Sábado'
           
];

foreach ($array as $valor) { // mantem a sequência com o valor primário
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) { // começa a sequência a partir do valor definido na $array da linha (4)
    echo "$indice => $valor <br>";
}

// FOR = CONTROLAR A SEQUÊNCIA DE UMA FORMA PERSONALIZADA 
// FOREACH = CONTROLAR A SEQUÊNCIA DE UMA FORMA PROGRESSIVA OU CONTÍNUA COM INTERVALOS IGUAIS

$matrix =[
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']

];

foreach ($matrix as $linha) {
    // echo "$linha <br>";

    foreach ($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}

$numeros = [1, 2 , 3 ,4, 5]; // FORMA DE DOBRAR OS NÚMEROS INFORMADOS DE UMA TABELA
foreach ($numeros as &$dobrar) {
    $dobrar *= 2; 
    echo "$dobrar <br>";
}
print_r($numeros);



