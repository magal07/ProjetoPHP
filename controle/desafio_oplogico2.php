<div class="titulo">Desafio OPL</div>


<form action="#" method="post">
<div>
    <label for="aH">APOSENTADORIA - DEFINA O SEXO: </label>
        <select name="aH" id="aH">
            <option value="1">Homem</option>
            <option value="0">Mulher</option>
        </select>
        </div> <br>
        <div>
    <label for="aM">DEFINA SUA IDADE</label>
        <select name="aM" id="aM">
            <option value="1">60 ANOS + OU EQUIVALENTE </option>
            <option value="0">65 ANOS + OU EQUIVALENTE </option>
        </select>
        </div>
        <button>Executar</button>
</form>

<style>
    button, select {
    
        font-size: 1.2rem; 
            padding: 10px; /* Ajuste do padding para 10px */
            background-color: #808080;
            color: #eee;
            font-weight: bold;
            border-radius: 10px;
            border: none; /* Remover borda para um visual mais limpo */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Sombra sutil */
            transition: background-color 0.3s ease; /* Transição suave de cor */
        }
        button:hover, select:hover {
            background-color: #606060; /* Mudança de cor ao passar o mouse */
        }
    
</style>

<?php

    if(isset ($_POST['aH']) && isset($_POST['aM'])) { 
    $aH = $_POST['aH'] === '1';
    $aM = !!$_POST['aM'];

    
    $idade = 65; 
    $sexo = 'MASCULINO';
    $criterioHomem = ($idade >=65 && $sexo === 'MASCULINO');
    $criterioMulher = ($idade >=60 && $sexo === 'FEMININO');
    
 if($aH && $aM) {
    $naoaH ='Não Aposenta';
   
} elseif($aH xor $aM) {
    $naoaM ='Não Aposenta';
} 
if($aH or $aM) {
    $naoaposenta = false;
}

if($aH) {
    $resultado = "O Sr. pode se aposentar!";
} else {
    $resultado = "Você ainda não tem idade o suficiente para se aposentar";
}

$aposenta = !$naoaposenta;

if(!$naoaposenta) {
    $resultado .= '<br>Pressione: Aceito os Termos de Contrato e Dirija-se a Próxima Etapa!';
} else {
    $resultado .= '<br>Falta alguns anos para o(a) Senhor(a) se aposentar'; 
}

echo "<p>$resultado</p>";

// echo var_dump($_POST['aH']);

}
   
