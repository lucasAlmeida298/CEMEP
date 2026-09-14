<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra finalizada</title>
</head>

<body>
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
                    <input type="hidden" name="nomeProduto" value="<?php print $_POST["nomeProduto"]; ?>">
                    <input type="hidden" name="precoProduto" value="<?php print $_POST["precoProduto"]; ?>">
                    <input type="hidden" name="quantidade" value="<?php print $_POST["quantidade"]; ?>">
                </form>
                <?php
                $nomeProduto = $_POST["nomeProduto"];
                $precoProduto = $_POST["precoProduto"];
                $quantidade = $_POST["quantidade"];
                $valorTotal = 0;
                $tipoDesconto;
                function calcularTotal($valorTotal, $precoProduto, $quantidade) {
                    $valorTotal = $precoProduto*$quantidade;
                    return;
                }

                if ($valorTotal>200) {
                    $tipoDesconto=0;
                }
                else if ($valorTotal>=200 && $valorTotal<500) {
                    $tipoDesconto=1;
                }
                else {
                    $tipoDesconto=2;
                }
                ?>

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
</body>

</html>