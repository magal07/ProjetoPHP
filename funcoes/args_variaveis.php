<div class="titulo">Argumentos Variaveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15, 6 , 7 , 8 , 9) . '<br>'; // SÓ FARÁ A LEITURA do $a = 14 e do $b = 15
echo soma(6, 5, 4) . '<br>';

function somaCompleta(...$numeros) { // > "..." 
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
        return $soma; 
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];

echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        } 
    }
}
echo '<br>';

membros("Ana Silva", "Pedro", "Rafaela", "Amanda");
membros("Roberto");

function escala($escalado, ...$reserva) {
    echo "Escalado: $escalado <br>";
    if($reserva) {
        foreach($reserva as $res){
            echo "Reserva: $res<br>";
        }
    }
}

echo '<br>';

escala("JÚLIO", "ÂNTONI", "ADALBERTO"); 

echo '<br>';

function timeFUT($titular, ...$banco){
    echo "Titular: $titular <br>";
    if($banco) {
        foreach($banco as $prox) {
            echo " Banco: $prox <br>";
        }
    } 
}

timeFUT ("Bezerra", "Augusto", "Epitácio", "Epaminondas",  "Junião"); 