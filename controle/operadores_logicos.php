<div class="titulo">Operadores Lógicos</div>


<?php

echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // lembrando q (!) é uma negação lógica, tornando o oposto do valor real! (not)  
echo "<p class='divisao'>Tabela Verdade 'And' (E)</p><hr>";
var_dump(true and  true); // se eu selecionar e apertar ctrl + d ele seleciona expressões abaixo idênticas facilitando a edição 
var_dump(false and true); //
echo '<br>';
var_dump(true && 3 > 2 && 7 <= 7); // uso de mais de uma expressão encontrando o resultado verdadeiro! 
echo "<p class='divisao'>Tabela Verdade 'Or' (E)</p><hr>";
var_dump(true && 3 > 2 && 7 <= 7); // caso haja uma entre todas expressões errada, torna-se falsa!
echo "<p class='divisao'>Tabela Verdade 'Xor' (E)</p><hr>";
var_dump(true || true); // utilizando ||
var_dump(false and true); // utilizando and
var_dump(false or true); // utilizando OR
echo '<br>';
var_dump(false xor true); // utilizando XOR


// Operadores Lógicos // 
// Lembrando que o $ serve pra definir variaveis e o && duplo serve para iniciar uma operação lógica //
// === <--- extritamente igual! //
// || <- OU //
//EXEMPLO APOSENTADORIA

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia =true;

$criterioHomem = ($idade >=65 && $sexo === 'M');
$criterioMulher = ($idade >=60 && $sexo === 'F');
// forma de escrita extensa também pode ser usada ---- >$podeSeAposentar = $pagouPrevidencia && (($idade >=60 && $sexo === 'F') || ($idade >=60 && $sexo === 'F'));
$atingiuCriterio = $criterioHomem || $criterioMulher; 
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >=60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif($idade >=65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar um pouco mais...';
}

//EXEMPLO BENEFÍCIO
// ABAIXO CRIEI UM EXEMPLO SIMPLES DE SENTENÇAS DE CONFIRMAÇÃO, ONDE VOCÊ DEFINE QUE SE "FULANO DE TAL" TER 
// CRITÉRIOS ELE PODERÁ TER UM BENEFÍCIO CASO ELE NÃO TENHA OS CRITÉRIOS, INFORMARÁ OUTRA MENSAGEM NÃO AUTORIZANDO TER O BENEFÍCIO

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 60;
$sexo = 'M';
// NA PARTE ACIMA /\ iremos definir qual $idade e $sexo "Fulano de Tal" tem //
if($idade >=60 && $sexo === 'F') {
echo "Parabéns, você pode participar deste benefício -> $sexo";
// ACIMA, CITAMOS A $idade e o $sexo FEMININO citado pela letra 'F' 
} elseif($idade >=65 && $sexo ==='MACHO') {
    echo "Parabéns, você pode participar deste benefício -> $sexo"; 
    // ACIMA, CITAMOS A $idade e o $sexo MASCULINO citado pela letra 'M' 
} else {
    echo 'Você não corresponde aos critérios para poder utilizar deste benefício';
    // ACIMA, CITAMOS QUE FULANO DE TAL NÃO PODE TER PARTICIPAÇÃO NOS BENEFÍCIOS DEVIDO A NÃO ATENDEREM O CRITÉRIO ESTABELECIDO//
}