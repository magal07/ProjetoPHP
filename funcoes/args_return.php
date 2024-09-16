<div class="titulo">Argumentos & Retorno</div>

<?php

function obterMensagem() { 
        return 'Seja bem vindo(a)!';
}

obterMensagem();

$obMen = obterMensagem();

echo $obMen;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!"; 
}

echo '<br>';
echo '<br>', obterMensagemComNome('Marcelo');
echo '<br>', obterMensagemComNome('Leonardo');

function soma($a, $b) { 
            return $a + $b;

}

$x = 4;
$y = 5;

echo '<br>', soma(4, 5);
echo '<br>', soma(45, 78);
echo '<br>', soma ($x, $y); 

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1; 
trocaValor($variavel, 3);

echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){ // O & FAZ COM QUE A VARIÁVEL DENTRO DA CHAVE { SE TORNE A CHAVE PRINCIPAL DE BUSCA}
    $a = $novoValor;
}
  
trocaValorDeVerdade($variavel, 5);
echo '<br>', $variavel; 

