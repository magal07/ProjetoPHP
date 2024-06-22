<div class="titulo">Operadores Relacionais</div>

<style>

</style>

<?php

// var_dump(1 == 1); // TRUE
// var_dump(4 <= 23);   // FALSE
// var_dump(1 >= 1); // TRUE
// var_dump(1 <> 1);
// var_dump(1 != 1);

var_dump(1 == '1'); // TRUE
var_dump(1 === '1'); // Usar 3 simbolos de igual no var_dump faz uma consulta para verificar se os tipos são RESTRITAMENTE iguais! (1 está normal e outro em string)
var_dump(111 != '111'); //FALSE
var_dump(111 !== '111'); //TRUE

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 65;
if ($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
    echo "Menor de idade<br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos!<br>";
} else {
    echo "Terceira Idade = $idade anos!<br>";
}

echo '<p class="divisao"Spacheship</p><hr>';
var_dump(50 <=> 50); //Retorna o valor int 1 ou int 0 ou int -1 dependendo da igualdade entre o maior e o menor

echo '<p class="divisao"Spacheship</p><hr>';
var_dump(!!'');