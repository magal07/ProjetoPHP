<div class="titulo">Desafio Tabela II</div>

<form action="#" method="post"></form>
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value="10"
           name="linhas" id="linhas">
    </div>

    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value="10" 
           name="colunas" id="colunas">
    </div>

        <button>Gerar Tabela</button>

</form>

<?php
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);
?>



<style>
    form * {
        font-size: 1.8rem;    
        }
    form > div {
            margin-bottom: 5px;
    }
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

