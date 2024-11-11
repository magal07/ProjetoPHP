<div class="titulo">Métodos Abstratos</div>

<?php
// uma classe abstrata não pode herdar de uma interface, em vez de extends usa-se implements
abstract class Abstrata {  // Não pode ser utilizada de forma primária, sendo assim, os métodos só serão extendidos após a utilização da Classe CONCRETA
    abstract public function metodo1(); 
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata { // Classe filha abstrata que se extende da primária
    public function metodo1() {
        echo "Executando método 1<br>";
    }
    abstract public function metodo3(); 
}

class Concreta extends FilhaAbstrata { 
    public function metodo1() { 
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }
    public function metodo2($parametro){ 
        echo "Executando método 2, com parâmetro $parametro";
    }
    public function metodo3() { 
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta; 
$c->metodo1(); 
// $c->metodo2('externo');
$c->metodo3();

echo '<br>';
echo "Código validado!";

