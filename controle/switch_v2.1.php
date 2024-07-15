<div class="titulo">Conversor: v2.1</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
    <option value="km-milha">KM > MILHA</option>
    <option value="milha-km">MIILHA > KM</option>
    <option value="metro-km">METRO > KM</option>
    <option value="km-metro">KM > METRO </option>
    <option value="fahrenheit-celsius">Fahrenheit > Celsius </option>
    <option value="celsius-fahrenheit">Celsius > Fahrenheit </option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
       
        font-size: 1.8rem;
        border-radius: 10px;
        background-color: #050944;
        color: #eee;
        font-weight: bold;
        box-shadow:none;
        transition: background-color 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,1);

    }

    button:hover
    select:hover {
    background-color: #808080;

    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']){
    case 'km-milha':
            $distancia = $param * FATOR_KM_MILHA;
            $mensagem = "$param Km(s) = $distancia Milhas";
            break;

            case 'milha-km':
            $distancia = $param / FATOR_METRO_KM; 
            $mensagem = "$param Milhas = $distancia Km(s)";
            break;

            case 'metro-km':
            $distancia = $param / FATOR_METRO_KM;
            $mensagem = "$param Metros = $distancia Km(s)";
            break;
            
            case 'km-metro':
            $distancia = $param * FATOR_METRO_KM;
            $mensagem = "$param Km(s) = $distancia Metros";
            break;

            case 'celsius-fahrenheit':
            $conversao = $param * FATOR_CELSIUS_FAHRENHEIT + 32;
            $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
            break;

            case 'fahrenheit-celsius':
            $conversao = ($param - 32) / FATOR_CELSIUS_FAHRENHEIT;
            $mensagem = "{$param}º Fahrenheit = {$conversao}º Celsius";
            break;

            default:
            $mensagem = "Selecione o valor e uma alternativa!";
}

echo "<p>$mensagem</p>";




