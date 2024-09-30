<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
        return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL); // EXCLUI O PRIMEIRO VALOR, NO CASO = $nome = 'Senhor(a)' 
echo saudacao(NULL, NULL); // RETIRA OS DOIS VALORES = $ 
echo saudacao('Mestre', 'Supremo'); // ALTERAR OS VALORES ();

function anotarPedido($comida, $bebida = 'Agua') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburger');
anotarPedido('Pizza', 'Refrigerante'); // No mesmo critério, utilizamos uma função que padroniza uma das funções, afim de nunca deixa-la em branco a não ser que seja informado outra palavra no lugar.
anotarPedido('Cachorro Quente', null); // Retirando a àgua do padrão
echo '<br>';
function anotarPedido2($bebida = 'Àgua', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2('Hamburguer'); (PARÂMETRO PADRÃO SENDO INICIAL, COUNTERA O SEGUNDO PARÂMETRO)
anotarPedido2('Refrigerante', 'Pizza'); // JÁ DESTA FORMA, FUNCIONA NORMALMENTE! 
