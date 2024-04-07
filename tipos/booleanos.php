<div class="titulo">Tipo Booleanos</div>

<?php

// BOLEANO (PRONÚNCIA - BULEAN) SERVE PARA DAR OS VALORES ENTRE VERDADEIRO E FALSO, CODIFICANDO COM 1 PARA VERDADEIRO E NADA OU 0 (ZERO) PARA FALSO - O 0 VALE PARA TODOS OS FALSE, JÁ O TRUE ABRANGE TANTO NÚMEROS NEGATIVOS COMO -1 COMO POSITIVOS COMO 10000
echo TRUE, '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// FAZER REGRAS DE CONVERSÕES

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // APENAS 0 É FALSE
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.00001);
echo '<br>' . var_dump((bool) ""); //false
echo '<br>' . var_dump((bool) " "); //false
echo '<br>' . var_dump((bool) "0"); //false
echo '<br>' . var_dump((bool) "00"); // todo resto é true, tudo que contem caractéria ou número dentro do parentese é true com exceção do 0 e "NADA". 
// todo resto é true, tudo que contem caractéria ou número dentro do parentese é true com exceção do 0 e "NADA". 
echo '<br>';
echo '<br>' . var_dump(!!"False");
