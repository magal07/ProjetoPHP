<div class="titulo">Retornando Função</div>

<?php

function soma($a) {
    return function($b) use ($a){ 
        return $a + $b;
    };
}

echo soma (13) (1000);

$doisMais = soma(2); // utilizar o algoritmo para chamar parte dos parâmetros

echo '<br>', $doisMais(10); 
echo '<br>', $doisMais(18); 