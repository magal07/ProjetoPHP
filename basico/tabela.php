<table>
    <caption>Produtos</caption> //* SEQUÊNCIA TÍTULO: thead>tr>th - CÉLULAS: tbody>tr>td>ESCREVA O NOME DO ÍTEM< e feche as sentenças. 
    <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>iPad</td>
            <td>3289,00</td>
            <td>5</td>
            <td>16445,00</td> 
        </tr>
        <tr>
            <td>Samsung</td>
            <td>2649,00</td>
            <td>8</td>
            <td>21192,00</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3" >Total</td>

            <td>
            R$ 38.054,98
            </td>
        </tr>
    </tfoot>
</table>

<style>
    table {

        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
    }
    thead tr {
        border-bottom: solid 3px #444;
    }

    tbody tr:hover {
        background-color: #dedede;
    }
    tfoot {
        background-color: #444;
        color: #fff;
        font-weight: bold;
    }

</style>
