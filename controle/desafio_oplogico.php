<div class="titulo">Desafio - Operadores Lógicos</div>



<!-- Exercício   ("<! --" é um comentário html )

// 1 PESSOA 
// 2 ENTREGAS DE TRABALHO = COMPRA TV 50 E TOMA SORVETE
// 1 ENTREGA DE TRABALHO = TOMA SORVETE E COMPRA TV DE 32
// 0 ENTREGA = FAMÍLIA VAI FICAR EM CASA NO FINAL DE SEMANA, PORÉM VAI FICAR MAIS SAUDÁVEL
// OPERAÇÕES COM i, ou, ou exclusivo e negação

-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça-Feira):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta-Feira):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>    
    <style>
          button, select {
        font-size: 1.4rem; 
        padding: 5px <? 2 * 10 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
          }
    </style>

<?php
    if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

if($t1 && $t2){
     $tv ='50"';       
} elseif($t1 xor $t2){
    $tv = '32"';
}

if($t1 or $t2) {
    $sorvete = true;
}

if($tv) {
    $resultado = "Vamos Comprar uma TV de $tv";
}   else {
    $resultado = "Sem TV desta vez";
}

$saudavel = !$sorvete;

if(!$sorvete) {
    $resultado .= '<br>Estamos mais saudáveis!';
} else {
    $resultado .= '<br>Sorvete Liberado \o/';
}

echo "<p>$resultado</p>";

    }
    