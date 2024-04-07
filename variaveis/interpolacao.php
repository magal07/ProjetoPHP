<div class="titulo">Interpolação</div>

<?php
// INTERPOLAÇÃO É O MESMO QUE RESOLVER E/OU INTERPRETAR O VALOR DE UMA VARIAVEL DENTRO DE UMA STRING
$numero = 10;
echo $numero;
echo '<br> $numero'; //Aspas simples não imprime número e sim $numero = errado
echo "<br> $numero + 1";

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos s";
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto}s";
echo "<br>";
