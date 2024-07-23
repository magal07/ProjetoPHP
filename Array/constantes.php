<div class="titulo">Constantes</div>

<?php

const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[0] ='banana'; // OS ELEMENTOS DO ARRAY NÃO PODEM SER ALTERADOS
// FRUTAS [] = 'banana'; // < - ERRO, NÃO RETORNA VALOR 
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i'; // NÃO RETORNA POIS OS ELEMENTOS SÃO CONSTANTES! 
echo '<br>' . CARROS ["Ford"];

define('Cidades', array('Belo Horizonte', 'Recife'));
// CIDADES [""] = 'Rio de Janeiro'; // NÃO É POSSÍVEL POR CONTA DA CONSTÂNCIA
echo '<br>' . CIDADES[1];