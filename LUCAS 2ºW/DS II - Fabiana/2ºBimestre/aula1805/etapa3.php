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
                <h2>Cadastro - Etapa 3/3</h2>
                <h1>SPA - Bem estar do cliente</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form>
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
                    <input type="hidden" name="planoAdotado" value="<?php print $_POST["planoAdotado"] ?>">
                    <input type="hidden" name="valorDia" value="<?php print $_POST["valorDia"] ?>">
                    <input type="hidden" name="quantidadeDias" value="<?php print $_POST["quantidadeDias"] ?>">
                    <input type="hidden" name="observacoes" value="<?php print $_POST["observacoes"] ?>">
                    <h4>Forma de pagamento <select name="formaPagamento">
                            <option value="vista">A vista</option>
                            <option value="prazo">A prazo</option>
                        </select>
                        <h4>
                            <h4>Data de pagamento: <input type="date" name="dataPagamento"></h4>
                            <input type="submit" value="Prosseguir">
                            <input type="reset" value="Limpar">
            </td>
        </tr>
    </table>
</body>

</html>