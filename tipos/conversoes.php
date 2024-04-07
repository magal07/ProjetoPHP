<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// int para float (se eu pegar um valor inteiro e acrescento 1 ele passa pra outro valor range que ultrapasse os valores limites do int)

echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int (há situações onde as informações podem ser perdidas)

echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.9999));
echo '<br>';
var_dump((int) round(2.8));

// operações com string

echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>';
// var_dump(1 + "cinco"); 
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
// var_dump(1 + "cinco 5");
echo '<br>';
var_dump(1 + "26+6");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");
echo '<br>';
// sempre que fizer uma operação com float, o valor será convertido para float
