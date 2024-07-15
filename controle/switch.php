<div class="titulo">Switch</div>

<?php

$categoria ='SUV';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif($categoria === 'SUV'){
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else{
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

// lembrando de usar strtolower para ler maiúsculas ou minúsculas!
$categoria = 'LUXO';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break; 
    case 'suv':
    case 'suv Básico':
    $carro = 'Renegade';
    $preco = 80000;
    break;
    case 'sedan';
    $preco = 55000;
    break;
    default : 
    $carro = 'Mobi';
    $preco = 33000;
    break;
}
// Sempre usar break no switch para que não execute todos os cases abaixo ou acima! desta forma o break faz com que ao encontrar uma expressão 
// ele saia das chaves e prossegue com o código!
$precoFormatado = number_format($preco, 2, ',' , '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
