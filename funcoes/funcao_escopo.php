<div class="titulo">Função & Escopo</div>

<?php
/* CONCEITO DE FUNÇÃO É TER UMA SEQUÊNCIA DE CÓDIGO OU SEJA, UM ALGORITIMO E 
VOCÊ DAR UM NOME A ESSA SEQUÊNCIA DE PASSOS DE TAL FORMA QUE VC CONSIGA CHAMAR
ESSA SEQUÊNCIA DE PASSOS E CHAMAR CÓDIGOS!
O GRANDE OBJETIVO DE DEFINIR FUNÇÕES, É DAR UM NOME A UM CONJUNTO DE PASSOS 
(SABER DEFINIIR BONS NOMES DE VARIAVEIS, CONSTANTES E FUNÇÕES)*/

// É melhor ter um nome claro e não ter comentários explicando a função! 
function imprimirMensagens(){ // O ALGORITIMO INTERNO PODE TER CONDICIONAIS, LAÇOS DE REPETIÇÃO! CONTANTO Q MANTENHA A FUNÇÃO COM UTILIDADE ÚNICA!
    echo "Olá!<br>";
    echo "Até a próxima!<br>";
}
imprimirMensagens(); // <- teste função!



$variavel = 1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a Função: $variavel <br>";
}
echo "Antes: $variavel<br>";
trocaValor(); 
echo "Depois: $variavel <br>";
echo "<br>";
function trocaValorDeVerdade() {
    global $variavel; // VARIAVEL LOCAL: FICA DENTRO DO LOCAL QUE FOI DEFINIDO DENTRO DA FUNÇÃO! >  GLOBAL > INDICA AO PHP Q QUERO ACESSAR A VARIÁVEL DO ESCOPO MAIS ABRANGENTE! (ACESSAR A DE FORA DA FUNÇÃO)
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

// var_dump(trocaValorDeVerdade()); 