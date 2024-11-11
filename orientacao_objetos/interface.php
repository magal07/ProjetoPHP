<div class="titulo">Interface</div>

<?php
// uma classe abstrata não pode herdar de uma interface, em vez de extends usa-se implements

interface Animal {  // quando não existe um padrão específico entre a classe. (Todos animais respiram, mas não da pra saber por onde, como e com o que ele respira)

        function respirar(); 
}

interface Felino { 
    function correr();

}
interface mamifero { 
    function mamar();
}
interface Canino extends animal, mamifero {  
    function latir(): string; 
}
//  EXTENDS: Quando uma classe herda de outra classe um comportamento e atributos 
// IMPLEMENTS: Herda a obrigatoriedade de implementar DETERMINADAS FUNCIONALIDADES especificada. (Não vai receber a implementação em si, somente a assinatura e a obrigatoriedade de implementar uma function)
class Cachorro implements Animal, Canino {  
        function respirar() {
            return "Cachorro = " . "Irei usar oxigênio!";
        }
        function latir(): string { 
            return 'AU AU ';
        }
            function mamar() {
                return "Irei usar leite";
            }
            function correr() {
                return 'vruuuuun!';
            }
  }

$animal = new Cachorro();
$animal->respirar();
echo $animal->respirar(), ' <br>';
echo $animal->latir(), ' <br>';
echo $animal->mamar(),  '<br>';

echo '<br>';

var_dump($animal);

echo '<br>';

var_dump($animal instanceof Cachorro); // instance off = intância de = $animal é uma instância de cachorro? bolean diz que sim! 

echo '<br>';

var_dump($animal instanceof canino);
echo '<br>';
var_dump($animal instanceof mamifero); 
echo '<br>';
var_dump($animal instanceof felino); // cachorro corre mais n é felino. 
echo '<br>';

// todas interfaces em PHP tem que ter metodos! obrigatóriamente publicos por padrão!