<div class="titulo">Desafio For</div>


<?php

$impressao1 = '';

for($cont = 1; $cont <= 5; $cont++) { 
    
   $impressao1 .= '#';
   echo "$impressao1 <br>";
}
echo "<hr>";

for(
    $impressao2 = "#";
    $impressao2 !== "######";
    $impressao2 .= "#"

){

        echo "$impressao2 <br>";

}