<div class="titulo">Comparação Arrays</div>

<?php

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];

echo '<br>';
var_dump($arr1 == $arr3); // == vai dar TRUE porque tem os mesmos conteudos, === (extritamente igual) vai dar negativo pq a ordem ou o tipo de escrita foi alterada
echo '<br>';
var_dump($arr1 != $arr3);
echo '<br>';
var_dump($arr1 !== $arr3);
echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); 
echo '<br>';
