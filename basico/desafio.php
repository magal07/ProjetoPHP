<div class="titul">Desafio</div>

<h3>Resolva as seguintes equações:</h3>
<ul>
    <li> 1 + 1 = <?= 1 + 1 ?></li>
    <?php   /* -->Neste exemplo, simplificamos toda a arquitetura matemática somente com o "<? ?>" */ ?>
    <li> 4 + 4 = <?php echo 4 + 4; ?></li>
    <!-- /* No exemplo acima utilizamos o echo para resolver a equação matemática -->
    <li> 8 + 8 = <?= "1" ?><?php echo 3 + 3; ?>
        <!-- :O exemplo acima na linha 7 é um exemplo irracional -->
</ul>

<h3>Resolução do Problema:</h3>

<?php
echo "Alternativa 01 Resposta:" . 1 + 1 . "<br>";
echo "Alternativa 02 Resposta:" . 4 + 4 . "<br>";
echo "Alternativa 03 Resposta:" . 8 + 8 . "<br>";
?>