<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual é o método que a posição do texto 'abc'
// nastring '!AbcaBcabc! retorne 1? 
// !AbcaBcabc 


echo strpos('!AbcaBcabc!', 'abc') . '<br>';
echo stripos('!AbcaBcabc!', 'abc') . '<br>';
echo stripos(strtolower('!AbcaBcabc!'), strtolower('ABC')) . '<br>';
