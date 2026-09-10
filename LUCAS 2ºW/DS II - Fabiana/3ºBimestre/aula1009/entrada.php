<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>

<table border="1" align="center" width="50%">
    <tr>
        <td align="center">
            <h1>Exercício return</h1>
            <?php
            include "funcaoData.php";
            dataAtual();
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <form action="recebeDados.php" method="post">
                <h4>Nome do produto: <input type="text" size="30" name="nomeProduto"
                        placeholder="Digite o nome do produto"></h4>
                <h4>Preço do produto: <input type="text" size="20" name="precoProduto"
                        placeholder="insira o preço do produto"></h4>
                <h4>Quantidade comprada: <input type="text" size="10" name="quantidade"></h4>
                <input type="submit" value="Finalizar compra">
            </form>
        </td>
    </tr>
    <tr>
        <td align="center">
            <?php
            include "funcaoHora.php";
            horaAtual();
            ?>
        </td>
    </tr>
</table>

<body>

</body>

</html>