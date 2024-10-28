<div class="titulo">Closure e Callable</div>

<?php
// CLOSURE = ENCERRAMENTO E/OU FECHO 
$soma1 = function($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; // VERIFICAR SE É CALLABLE

echo soma2(2, 3) . ' ';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>'; // DEVE-SE COLOCAR ASPAS SIMPLES POIS: Ao tentar
// verificar se soma2 é "callable" (ou seja, uma função válida que pode ser chamada), 
//a função is_callable está interpretando soma2 como uma constante, pois o PHP espera uma string
// representando o nome da função ou um closure.

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}
echo '<br>';

executar1(2, 3, '+', $soma1); 
executar1(2, 3, '+', 'soma2'); 

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

executar2(1000, 200, '+', $soma1);
// executar2(100, 200, '+', 'soma2'); EXPLICAÇÃO:  NÃO SERÁ IMPRESSO POIS NÃO É IDENTIFICADO COMO CLOSURE = NÃO É UMA FUNÇÃO

