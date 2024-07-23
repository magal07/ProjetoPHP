<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
            <option value="AC">ACRE</option>
            <option value="BA">BAHIA</option>
    </select>

<button>Enviar</button>

</form>

<style>
    form > * {
        font-size: 1.8rem;
        padding: 10px;
        border-radius: 8px;
        box-shadow: none;
        transition: background-color 0.3s ease;
    } 
    button:hover 
    select:hover {
        background-color: #606060;
    } 

</style>

<?php 

print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);
