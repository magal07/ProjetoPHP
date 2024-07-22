<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade"=> 25,
     "cor" => "verde",
      "peso" => 49.8,
);

print_r($dados);

echo '<br>' . var_dump($dados[0]);
echo '<br>'. $dados["idade"];
echo '<br>'. $dados["cor"];
echo '<br>'. $dados["peso"];
// echo '<br>'. $dados["outra_informacao"] retorna NULL
echo '<br>';
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e", 
);
// não usar pra nao gerar confusão /\
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista );

$lista[true] = 'tentei indexar com falso';
echo '<br>';
print_r($lista );


