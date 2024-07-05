<div class="titulo">Teste de Formulário</div>


<form action="#" method="post">
    <select name="Vacinação Covid" id="Vacinação Covid">
        <option value="0">Vacinado</option>
        <option value="1">Não Vacinado</option>
    </select>
    <button>Verificação de Vacina</button>
    </select>
</form>

<style>
    button
     {
        margin: 3px;
        padding: 10px;
        text-align: center;
        font-size: 10 rem;
        font-weight: bold; 
        transition: linear;
        border-radius: 10px; 
        border: none;
        box-shadow: 0 4px 8px rgba(0.0.0.1);
        transition: background-color 0.7s ease; /* Transição suave de cor */
    }
        button:hover {
            background-color: #498E30; /* Mudança de cor ao passar o mouse */
        } select:hover {
            background-color: lightslategrey;
        }

</style>


<?php


if(isset($_POST["Vacinação Covid"]))