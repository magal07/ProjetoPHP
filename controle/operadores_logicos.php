<div class="titulo">Operadores Lógicos</div>


<?php

echo "<p>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // lembrando q (!) é uma negação lógica, tornando o oposto do valor real! (not)  
echo "<p>Tabela Verdade 'And' (E)</p><hr>";
var_dump(true and  true); // se eu selecionar e apertar ctrl + d ele seleciona expressões abaixo idênticas facilitando a edição 
var_dump(false and true); //
echo '<br>';
var_dump(true && 3 > 2 && 7 <= 7); // uso de mais de uma expressão encontrando o resultado verdadeiro! 
echo "<p>Tabela Verdade 'Or' (E)</p><hr>";
var_dump(true && 3 > 2 && 7 <= 7); // caso haja uma entre todas expressões errada, torna-se falsa!
echo "<p>Tabela Verdade 'Xor' (E)</p><hr>";
var_dump(true || true); // utilizando ||
var_dump(false and true); // utilizando and
var_dump(false or true); // utilizando OR
echo '<br>';
var_dump(false xor true); // utilizando XOR





?>


<style>
    p {
        font-weight: bolder;
        font-family: Arial, Helvetica, sans-serif;
    }

    hr {
        margin-top: 0px;
    }
</style>














?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: -2px;
    }
</style>