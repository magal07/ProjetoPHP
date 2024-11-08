<div class="titulo">Membros Estaticos</div>

<?php

class A { 
    public $naoStatic = 'Variável de Instância'; // Instância e objetos são sinônimos muito utilizados na programação
    public static $static = 'Varável de Classe (Estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1

        // echo "Estática = {$this->static}"; não pertence a instância 
        // tentativa 2 
        //  echo "Estática = {self::$static}";
        // tentativa 3 
         echo "Estática = " . self::$static . "<br>"; // self utilizado concatenado com a sintaxe 
        
    } 

    public static function mostrarStaticA(){
        //   echo "Não estática = {$this->naoStatic}"; $this-> não estará disponível neste contexto, pois imagina chamar milhares de instâncias.. pois não tem como definir qual instância será chamada
         echo "<br>Estática =" . self::$static . "<br>"; // Para acessar uma classe estática dentro de uma função estática, só pode ser empregado o uso do "self::" 
    }

}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // essa não é a forma mais interssante de uso, pois da a entender que essa é uma instância de um objeto 
echo A::$static, '<br>'; // FORMA IDEAL: Acessa diretamente pela classe { }
A::mostrarStaticA();