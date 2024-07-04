<div class="titulo">Desafio OPL</div>

<form action="#" method="post">
    <div>
        <label for="aposentadoriagenero">APOSENTADORIA - DEFINA O SEXO: </label>
        <select name="aposentadoriagenero" id="aposentadoriagenero">
            <option value="0">Homem</option>
            <option value="1">Mulher</option>
        </select>
    </div><br>
    <div>
        <label for="idade">DEFINA SUA IDADE</label>
        <select name="idade" id="idade">
            <option value="60">Possuo 60 ANOS ou +</option>
            <option value="65">Possuo 65 ANOS ou +</option>
        </select>
    </div>

    <button type="submit">Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.2rem;
        padding: 10px;
        background-color: #808080;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
    }

    button:hover,
    select:hover {
        background-color: #606060;
    }
</style>

<?php
if (isset($_POST['aposentadoriagenero']) && isset($_POST['idade'])) {
    $sexo = $_POST['aposentadoriagenero'];
    $idade = (int)$_POST['idade'];

    // Verificar se pode se aposentar
    if (($sexo == 1 && ($idade == 60 || $idade == 65)) || ($sexo == 0 && $idade >= 65)) {
        $resultado = "O(a) Sr(a) pode se aposentar!";
    } else {
        $resultado = "Você ainda não tem idade suficiente para se aposentar!";
    }

    echo "<p>$resultado</p>";
}
?>