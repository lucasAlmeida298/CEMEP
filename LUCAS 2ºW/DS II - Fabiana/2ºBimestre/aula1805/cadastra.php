<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SPA</title>
</head>

<body>

    <?php

    $valor_total = $_POST["valorDia"] * $_POST["quantidadeDia"];

    if ($_POST["forma_pg"] == "A Vista") {
        $valor_final = $valor_total - ($valor_total * 10 / 100);
    } else {
        $valor_final = $valor_total + ($valor_total * 5 / 100);
    }

    ?>

    <table border="1" align="center" width="60%">

        <tr height="130">
            <td colspan="2" align="center">

                <h2>CADASTRO FINALIZADO</h2>

                <h2>SPA – BEM ESTAR</h2>

                <h2>DADOS CADASTRADOS</h2>

            </td>
        </tr>

        <tr>
            <td colspan="2">

                <br>

                Cliente:
                <?php print $_POST["cliente"]; ?>

                <br><br>

                CPF:
                <?php print $_POST["cpf"]; ?>

                <br><br>

                RG:
                <?php print $_POST["rg"]; ?>

                <br><br>

                Sexo:
                <?php print $_POST["sexo"]; ?>

                <br><br>

                Data Nasc:
                <?php print $_POST["dataNascimento"]; ?>

                <br><br>

                Endereço:
                <?php print $_POST["endereco"]; ?>

                <br><br>

                Cidade:
                <?php print $_POST["cidade"]; ?>

                <br><br>

                Estado:
                <?php print $_POST["estado"]; ?>

                <br><br>

                CEP:
                <?php print $_POST["cep"]; ?>

                <br><br>

                Telefone:
                <?php print $_POST["telefone"]; ?>

                <br><br>

                Email:
                <?php print $_POST["email"]; ?>

                <br><br>

                Plano Adotado:
                <?php print $_POST["planoAdotado"]; ?>

                <br><br>

                Valor Dia:
                <?php print $_POST["valorDia"]; ?>

                <br><br>

                Qtd Dias:
                <?php print $_POST["quantidadeDia"]; ?>

                <br><br>

                Obs:
                <?php print $_POST["observacoes"]; ?>

                <br><br>

                Forma Pagamento:
                <?php print $_POST["formaPagamento"]; ?>

                <br><br>

                Data Pagamento:
                <?php print $_POST["dataPagamento"]; ?>

                <br><br>

                Valor Total:
                <?php print $valor_total; ?>

                <br><br>

                <?php

                if ($_POST["forma_pg"] == "A Vista") {
                ?>

                    Valor com Desconto 10%:
                    <?php print $valor_final; ?>

                <?php
                } else {
                ?>

                    Valor com Juros 5%:
                    <?php print $valor_final; ?>

                <?php
                }
                ?>

                <br><br>

            </td>
        </tr>

        <tr>
            <td colspan="2">

                <h2>>Desenvolvido por Mateus Chaim 2°W</h2>

            </td>
        </tr>

    </table>

</body>

</html>