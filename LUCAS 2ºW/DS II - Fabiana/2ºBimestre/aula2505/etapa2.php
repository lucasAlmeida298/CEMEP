<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercâmbio estudantil
    </title>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td>
                <h1 align="center">Intercâmbio Estudantil - Etapa 2/3</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form action="etapa3.php" method="post">
                    <input type="hidden" name="nome" value="<?php print $_POST["nome"]; ?>">
                    <input type="hidden" name="idade" value="<?php print $_POST["idade"]; ?>">
                    <input type="hidden" name="email" value="<?php print $_POST["email"]; ?>">
                    <input type="hidden" name="pais" value="<?php print $_POST["pais"]; ?>">
                    <input type="hidden" name="tempo" value="<?php print $_POST["tempo"]; ?>">


                    <h4>Tipo de hospedagem:</h4>
                    <h4><input type="radio" name="hospedagem" value="casaFamilia">Casa de Família</h4>
                    <h4><input type="radio" name="hospedagem" value="dormitorioEstudantil">Domitório Estudantil</h4>
                    <h4><input type="radio" name="hospedagem" value="apartamentoCompartilhado">Apartamento Compartilhado</h4>

                    <h4>Tipo de alimentação:</h4>
                    <h4><input type="radio" name="alimentacao" value="semAlimentacao">Sem alimentação</h4>
                    <h4><input type="radio" name="alimentacao" value="cafeDaManha">Café da Manhã</h4>
                    <h4><input type="radio" name="alimentacao" value="meiaPensao">Meia Pensão</h4>
                    <h4><input type="radio" name="alimentacao" value="pensaoCompleta">Pensão completa</h4>

                    <input type="submit" name="enviar" value="Próximo passo">
                    <br><br>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <h3 align="center">Desenvolvido por Lucas</h3>
            </td>
        </tr>
    </table>
</body>

</html>