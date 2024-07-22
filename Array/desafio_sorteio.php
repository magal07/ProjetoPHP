<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$indice = array_rand($nomes);
echo "<div>
         <h1 style ='text-align: center;'>
            $indice = $nomes[$indice]
        </h1>
    </div>";
    
    
    $indice = array_rand($nomes);
    echo "<h1 style='text-align: center;'>$indice = $nomes[$indice]<h1>";

    ?>

    <style>
            [center] {
                display: flex
                justify-content: center;
                text-align: center;
                
            } .titulo {
                text-align: center;
            }

    </style>

