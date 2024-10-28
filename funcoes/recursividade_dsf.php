<div class="titulo">Recursão</div>

<?php


$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
    if(is_array($elemento)){ 
     imprimirArray($elemento, $nivel . $nivel =[0]);   
    } else {
        echo "$nivel $elemento<br>";
      }
  }
}

imprimirArray($array); 

echo "<br>Acrescentando um padrão de siglas antecedente ao resultado <br>";
echo '<br>';
function acrescentarArrays($array, $acrescentar = 'CB0000'){
    foreach($array as $elementos) {
        if(is_array($elementos)) {
            acrescentarArrays($elementos, $acrescentar . $acrescentar[0]);
        } else {
            echo "$acrescentar $elementos <br>"; 
        }
    }
}

acrescentarArrays($array, 'RESULTADO ARRAY: '); 
