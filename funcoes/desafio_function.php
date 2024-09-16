<div class="titulo">Desafio Palindromo</div>

<?php

// DETECTAR SE UMA PALAVRA É UM PALÍNDROMO OU NÃO

function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) -1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
 }

 echo palindromo('arara') . ' ';
 echo palindromo('bola') . ' ';
 echo palindromo('ana') . ' ';
 echo palindromo('ovo') . ' ';
 
 echo '<br> ';
 
 function palindromoSimples($palavra) {
     return $palavra === strrev($palavra) ? 'Sim': 'Não';
    }
    
     echo palindromo('arara') . ' ';
     echo palindromo(palavra: 'bola') . ' ';
     echo palindromo(palavra: 'ana') . ' ';
     echo palindromo(palavra: 'ovo') . ' ';
     

     echo '<br>';

     
     function palindro($palavra) {
        $ultimoIndice = strlen($palavra) -1;
        for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
           }
        }
        return 'Sim';
    }

     echo palindro('ovo') . '';