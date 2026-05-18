<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h2>Cadastro - Etapa 2/3</h2>
                <h1>SPA - Bem estar do cliente</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form action="etapa3.php" method="form">
                    <input type="hidden" name="cliente" value="<?php print $_POST["cliente"] ?>">
                    <input type="hidden" name="cpf" value="<?php print $_POST["cpf"] ?>">
                    <input type="hidden" name="rg" value="<?php print $_POST["rg"] ?>">
                    <input type="hidden" name="sexo" value="<?php print $_POST["sexo"] ?>">
                    <input type="hidden" name="dataNascimento" value="<?php print $_POST["dataNascimento"] ?>">
                    <input type="hidden" name="endereco" value="<?php print $_POST["endereco"] ?>">
                    <input type="hidden" name="cidade" value="<?php print $_POST["cidade"] ?>">
                    <input type="hidden" name="estado" value="<?php print $_POST["estado"] ?>">
                    <input type="hidden" name="cep" value="<?php print $_POST["cep"] ?>">
                    <input type="hidden" name="telefone" value="<?php print $_POST["telefone"] ?>">
                    <input type="hidden" name="email" value="<?php print $_POST["email"] ?>">
                    <h4>Plano adotado: <select name="planoAdotado">
                            <option value="planoR">Plano reeducação alimentar</option>
                            <option value="planoE">Plano emagrecimento</option>
                            <option value="planoO">Plano obesidade</option>
                        </select>
                        <h4>
                            <h4>Valor do dia: <input type="text" name="valorDia" size="15" placeholder="informe o valor do dia"></h4>
                            <h4>Quantidade de dias: <input type="text" name="quantidadeDias" size="15" placeholder="informe a quantidade de dias"></h4>
                            <h4>Observações:</h4>
                            <h4><textarea id="obrservacoes" name="observacoes" rows="10" cols="50"></textarea></h4>
                            <input type="submit" value="Prosseguir">
                            <input type="reset" value="Limpar">
            </td>
        </tr>
    </table>
</body>

</html>