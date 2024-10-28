<div class="titulo">Desafio Classe</div>

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

