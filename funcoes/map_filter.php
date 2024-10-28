<div class="titulo">Map & Filter</div>

<?php

// MAP: Mapear uma array e transpor o resultado de cada referência para outra. Exemplo: 
// array=[1, 2, 3, 4], nesta configuração o MAp pode ser utilizado para alterar os resultados para ímpar ou par, exemplo:
// array=[I, P, I, P] I = ímpar, P = par, ou seja, cada um dos elementos da array pode ser transformado em uma indexação diferente.


// FILTER: Filtrar os valores de uma array, quero retornar os valores ímpares falsos e pares verdadeiros: 
// array=[4, 13, 55, 44], sendo assim ficaria: 
// array=[V, F,  F,   V] <- resultante dos filtros. 
// LOGO: se eu utilizei o filtro "Verdadeiro" ele só me trará o, 4 e o 44 que eram os pares. 

// EXEMPLO DE ARREDONDAR NOTAS (Filter): 

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);
echo '<br>';

// EXEMPLO DE ARREDONDAR NOTAS (MAP): 

$notasFinais2 = array_map(function($nota) { // criar função
    return round($nota); //retornar e processar o round
}, $notas);

print_r($notasFinais2);
echo '<br>';

// EXEMPLO DE APROVAÇÃO EM FILTER (Nota > que 7)

$apenasOsAprovados1 =[];

foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}

print_r($apenasOsAprovados1);


function aprovados($nota){
    return $nota >= 7;
}
// NO CASO DO FILTER, PRIMEIRO SE PASSA O ARRAY E DEPOIS A FUNÇÃO, O MAP É O OPOSTO

$apenasOsAprovados2 = array_filter($notas, function($nota){
    return $nota >= 7;
});

print_r($apenasOsAprovados2);

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return min($notaFinal, 10); // Garante que o valor não passe de 10
}
echo '<br>';

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);
