<div class="titulo">Desafio Orientação a Objetos</div>

<?php

interface Template {  // INTERFACE ENTRA COMO CARÁTER GERAL
    function metodo1(); 
    function metodo2($parametro);
}

abstract class FilhaAbstrata implements Template {  // USA-SE IMPLEMENTS PARA A INTERFACE E NÃO EXTENDS
    public function metodo1() {
        echo "Estou funcionando<br>";
    }
    public abstract function  metodo3();
}

class ClasseConcreta extends FilhaAbstrata { // CLASSE TAVA "IMPLEMENTS" e classe não implementa outra, ela estende!

    private $parametro;
    function __construct($parametro){ 
            $this->parametro = $parametro;
            echo "Estou funcionando!<br>";
        }
        function __destruct(){ 
            echo "Código Validado<br>";
        }
        public function metodo2($parametro){ 
            echo "Método 2 com parâmetros: $parametro<br>";
        }
        public function metodo3() {
            echo "Método 3 implementado na ClasseConcreta<br>";
        }
        public function apresentar() { 
            echo "$this->parametro<br>";
        }
    }


$exemplo = new ClasseConcreta("Exemplo de parâmetro<br>"); // 3 erro 
$exemplo->metodo1();
$exemplo->metodo2("Teste");
$exemplo-> metodo3();
$exemplo->apresentar();
echo "FIM!";