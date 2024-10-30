<div class="titulo">Construtor & Destrutor</div>

<?php

class Pessoa {
    private $nome;
    public $idade;


function __construct($novoNome, $idade = 18){ // dentro dos parenteses informe quais parâmetros receber conforme chamar o new + nome classe
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
} 

    function __destruct() { // < - Destrutor 
        echo 'E morreu!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";  
    }
}


// $pessoa = new Pessoa(); // Problema pois não informou nenhum parâmetro

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaB = new Pessoa('Pedro Henrique', 13);

$pessoaA->apresentar();
unset($pessoaA); 
echo "<br>";

$pessoaB->apresentar();
$pessoaB = null; 




