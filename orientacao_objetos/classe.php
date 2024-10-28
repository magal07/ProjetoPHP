<div class="titulo">Classe vs Objeto</div>

<?php
/* 
 OBJETO = INSTÂNCIA

CLASSE: ESTRUTURA DE DADOS

OBJETOS: DADOS

MEMBROS: Tudo aquilo que pertence a uma classe

CONSTRUTOR: CRIA UMA NOVA INSTÂNCIA

DESTRUTOR: LIBERAR ALGO, CONEXÃO COM BANCO DE DADOS, LIBERAR RECURSOS, FECHAR ARQUIVOS

Conforme exemplo abaixo, quando o atributo pertencer a um objeto e/ou instância, ele será de uso ÚNICO e extritamente
individual, sendo assim a idade, o nome e outros atributos serão exclusivos do "Cliente = x"

*/

class Cliente { 
    // atributos
    public $nome = 'Anônimo'; // PUBLIC = COLOCA FORA DA CLASSE
    public $idade = 17;

    public function apresentar() {
        echo "Nome: {$this->nome}<br>
        Idade: {$this->idade} <br>"; // THIS = ISTO -> Apontando para o objeto para chama-lo, sem $
    }
}

// CLIENTE 1 // 
$c1 = new Cliente();  
$c1->nome ='Ana Silva';
$c1->idade = 27.5;
$c1->apresentar();

echo "<br>";

// CLIENTE 2 //
 
$c2 = new Cliente; 
$c2->nome = 'Carlos';
$c2->idade = 43;
$c2->apresentar();

