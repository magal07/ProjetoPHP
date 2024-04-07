<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';


// concatenação 

echo ("Nós também" . ' somos'); # colocar um espaço antes da segunda palavra para separar as duas palavras
echo '<br>', "Também aceito", " virgulas", '<br>';  # nesta situação podemos utilizar virgulas para separar as palavras, porém somente em '<br>' 
echo "'Teste' " . '"Teste"' . '\'Teste\'' . "\"Teste\" " . "\\"; #Técnicas de burlar o sistema para acrescentar " ou \ 

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// ALGUMAS FUNÇÕES: 

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('minusculo');
echo '<br>' . ucfirst('só a primeira letra será maiuscula');
echo '<br>' . ucwords('todas as palavras'); #UCWORDS = UppercaseWords Toda Palavra Inicia Com Maiúscula
echo '<br>' . strlen('Quantas Letras?'); #Contabilizar as letras (NÃO CONTABILIZA AS ACENTUAÇÕES)
echo '<br>' . mb_strlen("Eu também", "utf-8"); # MESMA COISA DA DE CIMA
echo '<br>' . substr('Só uma parte mesmo', 7, 6); # Essa função neste exemplo faz pular 7 caractérias e printar as 6 próximas no caso a palavra "parte", sendo que ta descrito 6 mais ele só vai até a 5, se fosse 7 só iria até a 6 e assim sucessivamente.
echo '<br>' . substr('Só uma parte mesmo', 3); #Já neste exemplo, se eu não colocar o segundo parâmetro ele printa até o final.
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso isso isso'); # Usado para trocar uma palavra por outra independente da quantidade de vezes que ela for escrita.
