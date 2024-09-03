<div class="titulo">While | Do While</div>

<?php


/* EXEMPLO EM WHILE */

const VALOR_LIMITE = 5; 
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

/* EXEMPLO EM DO/WHILE */

$contador = 0;
do {
    echo "while $contador <br>";
    $contador++; // $CONTADOR = INCREMENTO //
} while($contador < VALOR_LIMITE); //* EXPRESSÃO VEM APÓS O BLOCO / LEMBRANDO QUE EM DO/WHILE PODEMOS UTILIZAR ; NO FINAL SEM CAUSAR BUG'S IGUAL NO FOR */

//* LOGO, NO EXEMPLO ACIMA, PRIMEIRO ELE EXECUTA O BLOCO E DEPOIS VERIFICA SE VAI OU NÃO CONTINUAR */

for($contador = 0; $contador < VALOR_LIMITE; $contador++){
    echo "for $contador <br>";
} // TESTANDO TEORIAS E PARADOXOS EM FOR

$contador =1000; // ELE BUSCA PELO MENOS UM RESULTADO, MESMO QUE SEJA 99999999, ELE BUSCA UM ÚNICO RESULTADO E DA O BREAK

do {
    echo "do-while $contador<br>";
    $contador++;
} while($contador < VALOR_LIMITE); 


//* NO EXEMPLO ABAIXO, O WHILE(TRUE) FAZ UMA CONTAGEM INFINITA DE FORMA QUE O BREAK SÓ SE ESTABELECE CONFORME O VALOR_LIMITE MENCIONADO ANTERIORMENTE
$contador =0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}