<div class="titulo">Variáveis Varáveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';
echo " $a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa";
echo '<br>';
echo "$opa {$$epa} {$ $$epa}";
// echo "$opa {$$epa} {---> PUXA A PRIMEIRA VARIÁVEL "$epa" <---$ ---> PUXA A SEGUNDA VARIÁVEL "$opa" <---$ ---> PUXA A TERCEIRA VARIÁVEL "$vish" que  tá escrito "Eita!!!"<--- $epa}"; 
