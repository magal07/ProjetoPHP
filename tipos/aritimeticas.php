<div class="titulo">Operações Aritiméticas</div>

<?php

echo 1 + 1, '<br>';

var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';
// echo intdiv(7, 0), '<br>'; # erro!
echo 4 ** 2, '<br>';

// Precedência de Operadores:
// () => ** / * % => + -    
// A linha 19 funciona exatamente como na matemática, ela informa que tem
// prioridade de ordem, iniciando por parentese (), exponentes **, * multiplicação
// % divisão, soma e subtração + e -  


echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>'; #14
echo (2 + 3) * 4, '<br>'; #20
echo 2 + 3 * 4 ** 2, '<br>'; #50
echo ((2 + 3) * 4) ** 2, '<br>'; #400
echo ((2 + 3) * 4) * 4 + 3, '<br>'; #83

// É SÓ SEGUIR A PRECEDÊNCIA DE OPERAÇÃO QUE DA CERTO 
