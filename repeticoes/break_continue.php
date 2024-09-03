<div class="titulo">Break | Continue</div>

<?php
// O exemplo a seguir, demonstra a utilização do break para que o contador chegando
// ao limite = $cont >20 ele pare a progressão sem dar continuidade a variável. (-Break)
$cont = 16;

for(;;){
        echo "$cont <br>";
        $cont++;
        if($cont >20) {
            break;
        }
        
    }
// Continue é um Break que não sai do laço, ele exclui na afirmação abaixo os números ímpares e dá continuidade baseado na sentença definida conforme linha 20
    echo "<hr>";    
    for(;;) {
        $cont++;
        if($cont % 2 === 1) {
            continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
}
    }
    echo "Fim!<br>";      
    
    foreach (array(1,2,3,4,5,6) as $valor){ 
        if($valor >= 5) break; // brekar no 5
        if($valor % 2 === 0) continue; // se o valor for igual a 0 ele continua (par)
        echo "$valor<br>";
    }
    
    echo "<br>Fim!";      