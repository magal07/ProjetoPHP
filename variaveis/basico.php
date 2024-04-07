<div class="titulo">Variáveis</div>

<?php

// OBRIGATÓRIAMENTE UMA VARIAVEL COMEÇA COM DOLAR $

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3;
echo $a;
echo '<br>';
$b  = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
echo '<br>';
echo isset($somaDosNumeros);
echo '<br>';
unset($somaDosNumeros);
echo var_dump($somaDosNmeros);
echo '<br>';
$variavel = 10;
echo '<br>' . $variavel;
$variavel = "Agora sou uma string!!";
echo '<br>' . $variavel;

// UMA VARIÁVEL NÃO ESTÁ LIMITADA AO TIPO "FLOAT, STRING, BOOLEAN".

// nomeclatura de varável

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';
// $6var = 'invalida'; 
// $%var7 = 'invlida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
