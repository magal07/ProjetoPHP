<div class="titulo">If Else</div>

<?php

if (true) {
    echo "Serei impresso?<br>";
}
if (true) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte A<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte b<br>";
}
// ABAIXO, UM EXEMPLO DE IF E ELSE UTILIZANDO FRASE PARA ACIONAR UM RESULTADO ESPECÍFICO
    $idade = 10;

    if ($idade >=18) {
        echo "Você é maior de idade<br> "; 
    } else {
        echo "Você é menor de idade<br>";
    }

    $genero ="masculino";

    if ($genero =="Feminino") {
        echo "Genêro: Masculino<br>";
    } else {
        echo "Genêro: Feminino<br>";
    }


if (false) {
    echo "Passo Nº 1 <br>";
} else if (false) {
    echo "Passo Nº 2<br>";
} elseif (false) {
    echo "Passo Nº 3<br>";
} elseif (false) {
    echo "Último passo<br>";
} else {
    echo "Prova Encerrada!<br>";
    echo "Parabéns, Você foi Aprovado!<br>";
}
echo "<br>";
?>

<br>
<div center><button dobro><?= "<p>APROVADO!<br> Clique aqui para ser redirecionado!</p><hr>" ?></button></div>

<style>
    button {
        padding: 2px;
        background-color: blue;
        color: white;
        font-weight: lighter;
        font-style: italic;
        font-size: small;
        border-radius: 5px;
    }


    [center] {

        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {

        font-size: <?= 3 ?>rem;
    }
