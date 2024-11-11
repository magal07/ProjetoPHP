<div class="titulo">Desafio Orientação a Objetos</div>

<?php

interface Template {  // INTERFACE ENTRA COMO CARÁTER GERAL
    function metodo1(); 
    function metodo2($parametro);
}

abstract class FilhaAbstrata implements Template {  // USA-SE IMPLEMENTS PARA A INTERFACE E NÃO EXTENDS
    public function metodo3() {
        echo "Estou funcionando<br>";
    }
    public function metodo1(){
    }
}

class ClasseConcreta extends FilhaAbstrata { // CLASSE TAVA "IMPLEMENTS" e classe não implementa outra, ela estende!

    function __construct($parametro) {

    }
    public function metodo2($parametro){ 

    }
}

$exemplo = new ClasseConcreta('<parâmetro aqui>');
$exemplo->metodo3();
