<div class="titulo">Classes Orientada a Objetos</div>

<?php

class DiaMesAno {
    public $dia = 'XX';
    public $mes = 'XX';
    public $ano = 'XXXX';

    public function informarDate() { 
        echo "{$this->dia}{$this->mes}{$this->ano}";
    }
}
    
$infDate = new DiaMesAno();
$infDate->dia="28/"; 
$infDate->mes='10/';
$infDate->ano='2024';
$infDate->informarDate(); 

echo '<br>';

$infDate = new DiaMesAno();
$infDate->dia="07/"; 
$infDate->mes='05/';
$infDate->ano='1999';
$infDate->informarDate(); 


echo "<br>";
echo "<br>";
?>

<div class="titulo"><h2>Organização de Operadores</h2></div>
<?php

class OperadoresDetran{
    public $operadorPreparacao = 'Preparação'; 
    public $operadorScanner = 'Digitalização'; 
    public $operadorCQ = 'Controle de Qualidade'; 
    public $operadorIndex = 'Indexação'; 
    
    public function importarOperador() {
        echo "Op. Prep: {$this->operadorPreparacao}<br>
        Op. Scanner: {$this->operadorScanner}
        Op. CQ: {$this->operadorCQ}
        Op. Index: {$this->operadorIndex}";
    }
}

$infOperador = new OperadoresDetran(); // Obrigatóriamente deve-se usar a expressão "new" + a class
$infOperador->operadorPreparacao="Mijuly";
$infOperador->operadorScanner="Vinicius<br>";
$infOperador->operadorCQ="Marielly<br>";
$infOperador->operadorIndex="Axiel<br>";
$infOperador->importarOperador();

