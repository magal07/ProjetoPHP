<div class="titulo">Herança</div>

<?php

class Pessoa { 
    public $nome;
    public $idade;

    function __construct($nome, $idade){ 
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }
        function __destruct() {
            echo 'Pessoa diz: Tchau!!!';
        }
        public function apresentar() {
            echo "{$this->nome}, {$this->idade} anos<br>";
        }
}
//USUÁRIO: CLASSE ESPECÍFICA // PESSOA: SUPER CLASSE GENÉRICA
 class Usuario extends Pessoa { // acrescentamos a palavra extends = criar herança, estender, etc.
    public $login; 
        
    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade; 
        parent::__construct($nome, $idade); // buscar na sintaxe PAI a referência e trazer, sem precisar repetidamente codar 
        $this->login = $login;
        echo 'Usuário Criado <br>';
    }

    function __destruct() { 
        echo 'Usuário diz: Tchau!! <br>';
        parent::__destruct();
    }
       public function apresentar() {
            echo "@{$this->login}: "; 
            parent::apresentar();
            /* {$this->nome}, {$this->idade} anos"; também pode se executar assim */ 
        }
 }

 $usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mends');
 $usuario->apresentar(); 

 unset($usuario);

