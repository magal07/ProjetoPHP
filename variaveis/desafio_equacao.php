<div class="titulo">Desafio Equação</div>


<?php

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;

echo "O resultado final é " . $final . ".";

// https://www.udemy.com/course/php-7-completo/learn/lecture/14795154#questions/9848128 <- caso tenha dúvidas. 

// AS VARIÁVEIS PODEM SER DO NOME QUE EU QUISER, SOMENTE ORGANIZAR AS FALAS.
