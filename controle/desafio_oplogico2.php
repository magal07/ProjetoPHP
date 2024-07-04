<div class="titulo">Desafio OPL</div>


<form action="#" method="post">
<div>
    <label for="posentadoriagenero">APOSENTADORIA - DEFINA O SEXO: </label>
        <select name="aposentadoriagenero" id="aposentadoriagenero">
            <option value="0">Homem</option>
            <option value="1">Mulher</option>
        </select>
        </div> <br>
        <div>
    <label for="idade">DEFINA SUA IDADE</label>
        <select name="idade" id="idade">
            <option value="0">Possuo 60 ANOS ou + </option>
            <option value="1">Possuo 65 ANOS ou + </option>
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

    if(isset ($_POST['aposentadoriagenero']) && isset($_POST['idade'])) { 
    $aposentadoriageneromasculino = $_POST['aposentadoriagenero'] === '0';
    $aposentadoriagenero = !!$_POST['idade'];
    $aposentadoriagenero = !!$_POST['idade'];
    $naopode = '';
    $simpode = false;


    if($aposentadoriagenero or $idade) {
    $simpode = true;
    } elseif ($aposentadoriagenero xor $idade) {
        $naopode = false;
    }

    

if($simpode) {
     $resultado = "O(a) Sr(a). pode se aposentar!";
} else {
    $resultado = "Você ainda não tem idade o suficiente para se aposentar!";
}
    $tudocerto = !$naopode;

    
    if($simpode){
        $resultado .= "<br>Continue abaixo:";
    } else{
        $resultado .= '<br>Existem inconsistências na sua aposentadoria!';
    }


    if(!$naopode) {
        $resultado .= '<br>Contribua mais e tente novamente!';
    } else {
        $resultado .= '<br>Aceite os termos de contrato!';
    }



echo "<p>$resultado</p>";



}
   
