<div class="titulo">Desafio Tabela</div>

<?php
$matriz = [ 
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'], 
    ['11', '12', '13', '14', '15'], 
    ['16', '17', '18', '19', '20'],
];

foreach($matriz as $linha) {
        foreach($linha as $valor) {
            echo "$valor ";
    }
            echo "<br>";
}
?>

<table border="commum">
    <?php
    foreach($matriz as $linha){
        echo '<tr>';  
        foreach($linha as $valor) {
            echo "<td>$valor</td>";
        }  
        echo '</tr>';
}
    ?>

</table>

<table>
    <?php
        foreach($matriz as $index => $linha) {
            $style = $index % 2 === 0 ?
            'background-color: lightblue;' : '';
            echo "<tr style='{$style}'>";
            foreach($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        

    ?>
</table>


<style>
    table {
        border: 3px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    tbody, tr:hover {
        padding: 10px 20px;
        background-color: #4444;
    }

    table td {
        padding: 10px 40px;
    }

    
</style>

<?php
//* pintar linhas de forma zebrada