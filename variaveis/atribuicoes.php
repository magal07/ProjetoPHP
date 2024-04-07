<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>';
echo $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;  // $numero = $numero - 1;
--$numero;  // $numero = $numero - 1;
echo '<br>' . $numero;
++$numero; // $numero = $numero + 1;
$numero++;  // $numero = $numero + 1;
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 5; //Para realizar a equação que transforma o número acima (20) em (15), devesse colocar a adição (-) antes do (=) para definir que é uma adição e não somente um valor fixo.
echo '<br>' . $numero;
$numero = 20;
$numero += 5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 2;
echo '<br>' . $numero;
$numero %= 10;
echo '<br>' . $numero;
$numero **= 4;
echo '<br>' . $numero;
$numero .= 4; // apenas concatenação
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer ';
echo '<br>' . $texto;
$texto .= ' de verdade';
echo '<br>' . $texto;

// $variavelInexistente = 'Valor existente'; 
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
