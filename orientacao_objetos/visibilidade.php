<div class="titulo">Visibilidade</div>

<?php

 class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        //$this->naoMostrar();
        echo "Class a) Pulbico = {$this->publico}<br>";
        echo "Class a) Protegido = {$this->protegido}<br>";
        echo "Class a) Privado = {$this->privado}<br>";
    }
    private function naoMostrar(){
        echo 'Não vou imprimir!<br>';
    }
 }

$a = new    A(); 
$a->mostrarA();
// $a->naoMostrar();

//echo 'Fim';
echo '<br>';
class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
   //  echo "Class B) privado = {$this->privado}<br>"; // ATRIBUTO PRIVADO É RESTRITO A CLASSE PAI
    }
}

$b = new    B(); 
$b->mostrarB();
